<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\UserModel;
use App\Models\TokoModel;
use App\Models\WishlistModel;

class Home extends BaseController
{
	protected $barangModel;
	protected $userModel;
	protected $tokoModel;
	protected $wishlistModel;

	public function __construct()
	{
		$this->barangModel = new BarangModel();
		$this->userModel = new UserModel();
		$this->tokoModel = new TokoModel();
		$this->wishlistModel = new WishlistModel();
	}

	public function index()
	{

		$barang = $this->barangModel->findAll();

		$data = [
			'title' => 'Home | Sinergi Kita',
			'content' => 'Home/index',
			'barang' => $barang
		];

		return view('layout/wrapper', $data);
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
			'barang' => $barang->paginate(6, 'barang'),
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
		$keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$barang = $this->barangModel->search($keyword);
		} else {
			$barang = $this->barangModel->get_barang();
		}

		$data = [
			'title' => 'Barang | Sinergi Kita',
			'content' => 'Home/produk',
			'barang' => $barang->paginate(14, 'barang'),
			'pager' => $this->barangModel->pager
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

	public function detail_penjual($id)
	{
		$user_data = $this->tokoModel->get_user($id);
		$total = $this->barangModel->get_count_barang($id);
		$barang = $this->barangModel->get_barang('barang', 'toko.id', $id);
		$data = [
			'title' => 'Detail Penjual | Sinergi Kita',
			'content' => 'Home/detail-penjual',
			'user' => $user_data->findAll(),
			'total' => $total,
			'barang' => $barang->paginate(6, 'barang'),
			'pager' => $this->barangModel->pager
		];

		return view('layout/wrapper', $data);
	}

	public function wishlist()
	{
		$session = session();
		$id = $this->wishlistModel->getid($session->Id_toko);
		if ($id->first() != null) {
			$wishlist = $this->wishlistModel->get($id->first()["Id_barang"], $session->Id_toko);
			$data = [
				'title' => 'Barang yang Disukai | Sinergi Kita',
				'content' => 'Home/wishlist',
				'wishlist' => $wishlist->paginate(6, 'barang'),
				'pager' => $this->wishlistModel->pager
			];
		} else {
			$wishlist = null;
			$data = [
				'title' => 'Barang yang Disukai | Sinergi Kita',
				'content' => 'Home/wishlist',
				'wishlist' => $wishlist,
				'pager' => null
			];
		}

		// dd($id->first()["Id_barang"]);
		return view('layout/wrapper', $data);
	}

	public function delete_wishlist($id)
	{
		$delete = $this->wishlistModel->delete($id);
		if ($delete) {
			session()->setFlashdata('pesan', 'Data Barang berhasil dihapus !');
			return redirect()->to('/Home/wishlist');
		} else {
			session()->setFlashdata('pesan', 'Barang tidak berhasil di hapus !');
			return redirect()->to('/Home/wishlist');
		}
	}

	public function tambah_wishlist($id)
	{
		$session = session();
		if ($session->email == null || $session->email == '') {
			session()->setFlashdata('fail_login', 'Maaf, sebelumnya anda harus login dahulu sebelum menggunakan fitur ini');
			return redirect()->to('/auth');
		}
		$data = [
			'Id_toko' => session()->Id_toko,
			'Id_barang' => $id
		];

		$save = $this->wishlistModel->save($data);

		if ($save) {
			$session = session();
			$session->setFlashdata('pesan', 'Data barang berhasil ditambahkan ke barang yang disukai !');

			return redirect()->to('/Home/wishlist');
		} else {

			return redirect()->to("/Home/wishlist")->withInput();
		}
	}

	public function detail_barang($id)
	{
		$wishlist = $this->wishlistModel->match($id, session()->Id_toko)->first();
		$barang = $this->barangModel->get_barang('barang', 'barang.id', $id);
		if ($wishlist != null) {
			$bool = true;
		} else {
			$bool = false;
		}
		$data = [
			'title' => 'Detail Barang | Sinergi Kita',
			'content' => 'Home/detail-barang',
			'barang' => $barang->findAll(),
			'bool' => $bool
		];

		return view('layout/wrapper', $data);
	}

	public function kategori($kategori)
	{
		$keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$barang = $this->barangModel->search($keyword);
		} else {
			$barang = $this->barangModel->search_kategori($kategori);
		}

		$data = [
			'title' => 'Barang | Sinergi Kita',
			'content' => 'Home/produk',
			'barang' => $barang->paginate(14, 'barang'),
			'pager' => $this->barangModel->pager
		];

		session()->setFlashdata('kategori', $kategori);

		return view('layout/wrapper', $data);
	}

	//--------------------------------------------------------------------

}
