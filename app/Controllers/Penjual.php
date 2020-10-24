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
            'user' => $user
        ];

        // var_dump($toko["Nama"]);
        return view('p_layout/wrapper', $data);
    }

    //--------------------------------------------------------------------

}
