<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\TokoModel;
use App\Models\BarangModel;

class Penjual extends BaseController
{
    protected $tokoModel;
    protected $userModel;
    protected $barangModel;

    public function __construct()
    {
        $session = session();
        $this->tokoModel = new TokoModel();
        $this->userModel = new UserModel();
        $this->barangModel = new BarangModel();
        if ($session->email == null || $session->email == '') {
            return redirect()->to('/auth');
        }
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $session = session();
        if ($session->email == null || $session->email == '') {
            return redirect()->to('/auth');
        }

        $barang = $this->barangModel->where('Id_toko', $session->Id_toko)->findAll();

        // var_dump($barang);
        // $db = \Config\Database::connect();

        // echo ($db->getLastQuery());

        $data = [
            'title' => 'Home | Dashboard Penjual',
            'content' => 'Penjual/index',
            'barang' => $barang
        ];

        return view('p_layout/wrapper', $data);
    }

    public function add_product()
    {
        $session = session();
        if ($session->email == null || $session->email == '') {
            return redirect()->to('/auth');
        }
        $data = [
            'title' => 'Tambah Barang | Dashboard Penjual',
            'content' => 'Penjual/add-product',
            'validation' => \Config\Services::validation()
        ];

        // echo $validation->listErrors();

        return view('p_layout/wrapper', $data);
    }

    public function ubah_profile()
    {
        $session = session();

        if ($session->email == null || $session->email == '') {
            return redirect()->to('/auth');
        }

        $toko = $this->tokoModel->where('Id_toko', $session->Id_toko)
            ->first();
        $user =  $this->userModel->where('Id_toko', $session->Id_toko)
            ->first();
        $data = [
            'title' => 'Ubah Profile | Dashboard Penjual',
            'content' => 'Penjual/ubah-profile',
            'toko' => $toko,
            'user' => $user,
            'validation' => \Config\Services::validation()
        ];

        // var_dump($toko["Nama"]);
        return view('p_layout/wrapper', $data);
    }

    public function ubah_product($id)
    {
        $session = session();

        if ($session->email == null || $session->email == '') {
            return redirect()->to('/auth');
        }

        $barang = $this->barangModel->find($id);

        $data = [
            'title' => 'Ubah Profile | Dashboard Penjual',
            'content' => 'Penjual/ubah-product',
            'barang' => $barang,
            'validation' => \Config\Services::validation()
        ];

        return view('p_layout/wrapper', $data);
    }

    public function update_product($id)
    {
        // dd($id);
        // validasi input
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Barang tidak boleh kosong'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required|min_length[30]',
                'errors' => [
                    'required' => 'Deskripsi tidak boleh kosong',
                    'min_length' => 'Deskripsi harus lebih dari 10 kata'
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harga tidak boleh kosong'
                ]
            ],
            'kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pilih salah satu kategori'
                ]
            ],
            'gambar' => [
                'rules' => 'max_size[gambar, 2048]|ext_in[gambar,jpg,png,jpeg]',
                'errors' => [
                    'max_size' => 'Maximum ukuran profile photo 2 Mb',
                    'ext_in' => 'Pastikan gambar anda .jpg .png atau .jpeg'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();


            // dd($validation->getErrors());
            return redirect()->to("/penjual/ubah_product/$id")->withInput();
        }

        if ($this->request->getFile('gambar') != '') {
            $image = $this->request->getFile('gambar');
            $image_name = $image->getRandomName();
            $image->move(ROOTPATH . 'public/uploads/barang', $image_name);

            $data = [
                'Nama' => $this->request->getVar('nama'),
                'Deskripsi' => $this->request->getVar('deskripsi'),
                'Harga' => $this->request->getVar('harga'),
                'Kategori' => $this->request->getVar('kategori'),
                'Gambar' => $image_name
            ];
        } else {

            $data = [
                'Nama' => $this->request->getVar('nama'),
                'Deskripsi' => $this->request->getVar('deskripsi'),
                'Harga' => $this->request->getVar('harga'),
                'Kategori' => $this->request->getVar('kategori')
            ];
        }

        $this->barangModel->set($data);
        $this->barangModel->where('id', $id);
        $update = $this->barangModel->update();

        if ($update) {
            $session = session();
            $session->setFlashdata('pesan', 'Data Produk berhasil di ubah !');

            return redirect()->to('/Penjual');
        } else {

            return redirect()->to("/penjual/ubah-product/$id")->withInput();
        }
    }

    public function delete_product($id)
    {
        $delete = $this->barangModel->delete($id);
        if ($delete) {
            session()->setFlashdata('pesan', 'Data Produk berhasil dihapus !');
            return redirect()->to('/Penjual');
        } else {
            session()->setFlashdata('pesan', 'Barang tidak berhasil di hapus !');
            return redirect()->to('/Penjual');
        }
    }

    public function save_product()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Barang tidak boleh kosong'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required|min_length[30]',
                'errors' => [
                    'required' => 'Deskripsi tidak boleh kosong',
                    'min_length' => 'Deskripsi harus lebih dari 10 kata'
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harga tidak boleh kosong'
                ]
            ],
            'kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kategori tidak boleh kosong'
                ]
            ],
            'gambar' => [
                'rules' => 'max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Maximum ukuran profile photo 2 Mb',
                    'is_image' => 'Pastikan anda mengupload berekstensi .jpg .png / .jpeg',
                    'mime_in' => 'Pastikan gambar anda .jpg .png atau .jpeg'
                ]
            ]
        ])) {
            return redirect()->to("/penjual/add_product")->withInput();
        }

        $slug = url_title($this->request->getVar('nama'), '-', true);

        // dd($this->request->getFile('gambar'));

        if ($this->request->getFile('gambar') != '') {
            $image = $this->request->getFile('gambar');
            $image_name = $image->getRandomName();
            $image->move(ROOTPATH . 'public/uploads/barang', $image_name);

            $data = [
                'Id_toko' => session()->Id_toko,
                'Nama' => $this->request->getVar('nama'),
                'Deskripsi' => $this->request->getVar('deskripsi'),
                'Harga' => $this->request->getVar('harga'),
                'Kategori' => $this->request->getVar('kategori'),
                'Slug' => $slug,
                'Gambar' => $image_name
            ];
        } else {

            $data = [
                'Id_toko' => session()->Id_toko,
                'Nama' => $this->request->getVar('nama'),
                'Deskripsi' => $this->request->getVar('deskripsi'),
                'Harga' => $this->request->getVar('harga'),
                'Kategori' => $this->request->getVar('kategori'),
                'Slug' => $slug
            ];
        }

        $save = $this->barangModel->save($data);

        if ($save) {
            $session = session();
            $session->setFlashdata('pesan', 'Data Produk berhasil di tambahkan !');

            return redirect()->to('/Penjual');
        } else {

            return redirect()->to("/penjual/save_product")->withInput();
        }
    }

    public function update_pemilik()
    {
        // validasi input
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama pemilik tidak boleh kosong'
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Email tidak boleh kosong'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password tidak boleh kosong'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat tidak boleh kosong'
                ]
            ],
            'no_handphone' => [
                'rules' => 'required|min_length[10]|integer',
                'errors' => [
                    'required' => 'No Handphone tidak boleh kosong',
                    'min_length' => 'No Handphone harus berisi minimal 10 angka',
                    'integer' => 'No handphone harus berisikan angka'
                ]
            ],
        ])) {

            return redirect()->to('/Penjual/ubah_profile')->withInput();
        }


        $data = [
            'Nama' => $this->request->getVar('nama'),
            'Email' => $this->request->getVar('email'),
            'Password' => $this->request->getVar('password'),
            'No_ktp' => $this->request->getVar('ktp'),
            'Alamat' => $this->request->getVar('alamat'),
            'No_handphone' => $this->request->getVar('no_handphone')
        ];

        $this->userModel->set($data);
        $update = $this->userModel->update();

        if ($update) {
            $session = session();
            $session->setFlashdata('pesan', 'Selamat! Informasi akun anda berhasil diubah !');

            return redirect()->to('/penjual/ubah_profile');
        } else {
            // $validation = \Config\Services::validation();

            return redirect()->to('/penjual/ubah_profile')->withInput();
        }
    }

    public function update_toko()
    {
        helper('filesystem');
        // validasi input
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama pemilik tidak boleh kosong'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required|min_length[30]',
                'errors' => [
                    'required' => 'Deskripsi tidak boleh kosong',
                    'min_length' => 'Deskripsi harus lebih dari 10 kata'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat tidak boleh kosong'
                ]
            ],
            'avatar_toko' => [
                'rules' => 'max_size[avatar_toko, 2048]|ext_in[avatar_toko,jpg,png,jpeg]',
                'errors' => [
                    'max_size' => 'Maximum ukuran profile photo 2 Mb',
                    'ext_in' => 'Pastikan gambar anda .jpg .png atau .jpeg'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();


            // dd($validation->getErrors());
            return redirect()->to('/penjual/ubah-profile')->withInput();
        }

        if ($this->request->getFile('avatar_toko') != '') {
            $image = $this->request->getFile('avatar_toko');
            $image_name = $image->getRandomName();

            $data = [
                'Nama' => $this->request->getVar('nama'),
                'Deskripsi' => $this->request->getVar('deskripsi'),
                'Alamat' => $this->request->getVar('alamat'),
                'Image_logo' => $image_name
            ];
            $image->move(ROOTPATH . 'public/uploads/penjual', $image_name);
        } else {

            $data = [
                'Nama' => $this->request->getVar('nama'),
                'Deskripsi' => $this->request->getVar('deskripsi'),
                'Alamat' => $this->request->getVar('alamat')
            ];
        }

        $this->tokoModel->set($data);
        $update = $this->tokoModel->update();

        if ($update) {
            $session = session();
            $session->setFlashdata('pesan', 'Selamat! Informasi akun toko anda berhasil diubah !');

            return redirect()->to('/Penjual/ubah_profile');
        } else {
            // $validation = \Config\Services::validation();

            return redirect()->to('/penjual/ubah_profile')->withInput();
        }
    }

    //--------------------------------------------------------------------

}
