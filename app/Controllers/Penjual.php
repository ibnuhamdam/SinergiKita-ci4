<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\TokoModel;

class Penjual extends BaseController
{
    protected $tokoModel;
    protected $userModel;

    public function __construct()
    {
        $session = session();
        $this->tokoModel = new TokoModel();
        $this->userModel = new UserModel();
        if ($session->email == null || $session->email == '') {
            return redirect()->to('/auth');
        }
    }

    public function index()
    {
        $session = session();
        if ($session->email == null || $session->email == '') {
            return redirect()->to('/auth');
        }
        $data = [
            'title' => 'Home | Dashboard Penjual',
            'content' => 'Penjual/index'
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
            'content' => 'Penjual/add-product'
        ];

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
            $validation = \Config\Services::validation();

            return redirect()->to('/Penjual/ubah_profile')->withInput()->with('validation', $validation);
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
            $validation = \Config\Services::validation();

            return redirect()->to('/penjual/ubah_profile')->withInput()->with('validation', $validation);
        }
    }

    public function update_toko()
    {
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
                    'required' => 'Email tidak boleh kosong',
                    'min_length' => 'Deskripsi harus lebih dari 10 kata'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat tidak boleh kosong'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('/auth/register')->withInput()->with('validation', $validation);
        }

        $data = [
            'Nama' => $this->request->getVar('nama_pemilik'),
            'Deskripsi' => $this->request->getVar('deskripsi'),
            'Alamat' => $this->request->getVar('alamat')
        ];

        $this->userModel->set($data);
        $update = $this->userModel->insert();

        if ($update) {
            $session = session();
            $session->setFlashdata('pesan', 'Selamat! Informasi akun anda berhasil diubah !');

            return redirect()->to('/Penjual/ubah-profile');
        } else {
            $validation = \Config\Services::validation();

            return redirect()->to('/auth/register')->withInput()->with('validation', $validation);
        }
    }

    //--------------------------------------------------------------------

}
