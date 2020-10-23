<?php

namespace App\Controllers;

class Penjual extends BaseController
{
    public function __construct()
    {
        $session = session();
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
        $data = [
            'title' => 'Ubah Profile | Dashboard Penjual',
            'content' => 'Penjual/ubah-profile'
        ];

        return view('p_layout/wrapper', $data);
    }

    //--------------------------------------------------------------------

}
