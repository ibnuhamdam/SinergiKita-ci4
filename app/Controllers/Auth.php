<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\TokoModel;

class Auth extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $session = session();
        $this->userModel = new UserModel();
        $this->tokoModel = new TokoModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Home | Dashboard Penjual'
        ];

        return view('auth/login', $data);
    }

    public function register()
    {
        $data = [
            'title' => 'Tambah Barang | Dashboard Penjual',
            'validation' => \Config\Services::validation()
        ];

        return view('auth/register', $data);
    }

    public function save()
    {
        // validasi input
        if (!$this->validate([
            'nama_pemilik' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama pemilik tidak boleh kosong'
                ]
            ],
            'email' => [
                'rules' => 'required|is_unique[user.Email]|valid_email',
                'errors' => [
                    'required' => 'Email tidak boleh kosong',
                    'is_unique' => 'Email sudah terdaftar, silahkan menggunakan email yang lain',
                    'valid_email' => 'Mohon memasukkan Email yang benar'
                ]
            ],
            'nama_toko' => [
                'rules' => 'required|is_unique[toko.Nama_toko]',
                'errors' => [
                    'required' => 'Nama toko tidak boleh kosong',
                    'is_unique' => 'Nama toko sudah digunakan'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password tidak boleh kosong'
                ]
            ],
            'no_ktp' => [
                'rules' => 'required|integer|max_length[16]|min_length[15]',
                'errors' => [
                    'required' => 'No Ktp tidak boleh kosong',
                    'integer' => 'No Ktp harus berbentuk angka',
                    'max_length' => 'Pastikan No Ktp benar dan berisi 16 urutan angka',
                    'max_length' => 'Pastikan No Ktp benar dan berisi 16 urutan angka',
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

            return redirect()->to('/auth/register')->withInput()->with('validation', $validation);
        }

        $this->userModel->save([
            'Nama' => $this->request->getVar('nama_pemilik'),
            'Nama_toko' => $this->request->getVar('nama_toko'),
            'Email' => $this->request->getVar('email'),
            'Password' => $this->request->getVar('password'),
            'No_ktp' => $this->request->getVar('no_ktp'),
            'Alamat' => $this->request->getVar('alamat'),
            'No_handphone' => $this->request->getVar('no_handphone')
        ]);

        $this->tokoModel->save([
            'Nama_toko' => $this->request->getVar('nama_toko'),
            'Alamat' => $this->request->getVar('alamat'),
        ]);
        $session = session();
        $session->setFlashdata('pesan', 'Selamat! Akun anda berhasil dibuat silahkan login!');

        return redirect()->to('/auth');
    }

    public function login()
    {
        $session = session();
        $modellogin = new UserModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $cek = $modellogin->get_login($email, $password);
        if ($cek) {
            if (($cek['Email'] == $email) && ($cek['Password'] == $password)) {
                session()->set('email', $cek['Email']);
                session()->set('Nama', $cek['Nama']);
                session()->set('Nama_toko', $cek['Nama_toko']);
                return redirect()->to('/Penjual');
            }
        } {
            $session->setFlashdata('fail_login', 'Maaf, email atau pasword yang anda masukkan tidak sesuai');
            return redirect()->to('/auth');
        }
    }

    public function logout()
    {
        $session = \Config\Services::session();

        $session->destroy();
        return redirect()->to('/auth');
    }

    //--------------------------------------------------------------------

}
