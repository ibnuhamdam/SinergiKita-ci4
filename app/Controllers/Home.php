<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\UserModel;
use App\Models\TokoModel;

class Home extends BaseController
{
	protected $barangModel;
	protected $userModel;
	protected $tokoModel;

	public function __construct()
	{
		$this->barangModel = new BarangModel();
		$this->userModel = new UserModel();
		$this->tokoModel = new TokoModel();
	}

	public function index()
	{

		$barang = $this->barangModel->findAll();

		$data = [
			'title' => 'Home | Sinergi Kita',
			'barang' => $barang
		];

		echo view('layout/header', $data);
		echo view('Home/index', $data);
		echo view('layout/footer');
	}

	public function home()
	{

		$keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$barang = $this->barangModel->search($keyword);
		} else {
			$barang = $this->barangModel->get_barang();
		}

		$data = [
			'title' => 'Home | Sinergi Kita',
			'content' => 'Home/home',
			'barang' => $barang->paginate(14, 'barang'),
			'pager' => $this->barangModel->pager
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
			'content' => 'Home/semua-penjual',
			'user' => $this->tokoModel->paginate(4, 'barang'),
			'pager' => $this->tokoModel->pager
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
