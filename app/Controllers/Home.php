<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home | Sinergi Kita'
		];

		echo view('layout/header', $data);
		echo view('Home/index');
		echo view('layout/footer');
	}

	public function home()
	{
		$data = [
			'title' => 'Home | Sinergi Kita',
			'content' => 'Home/home'
		];

		return view('layout/wrapper', $data);
	}

	public function kontak_kami()
	{
		$data = [
			'title' => 'Kontak Kami | Sinergi Kita',
			'content' => 'Home/kontak-kami'
		];

		return view('layout/wrapper', $data);
	}

	public function tentang_kami()
	{
		$data = [
			'title' => 'Tentang Kami | Sinergi Kita',
			'content' => 'Home/tentang-kami'
		];

		return view('layout/wrapper', $data);
	}

	public function produk()
	{
		$data = [
			'title' => 'Produk | Sinergi Kita',
			'content' => 'Home/produk'
		];

		return view('layout/wrapper', $data);
	}

	public function semua_penjual()
	{
		$data = [
			'title' => 'Semua Penjual | Sinergi Kita',
			'content' => 'Home/semua-penjual'
		];

		return view('layout/wrapper', $data);
	}

	public function wishlist()
	{
		$data = [
			'title' => 'Barang yang Disukai | Sinergi Kita',
			'content' => 'Home/wishlist'
		];

		return view('layout/wrapper', $data);
	}

	//--------------------------------------------------------------------

}
