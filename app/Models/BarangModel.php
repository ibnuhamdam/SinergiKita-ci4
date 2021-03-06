<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $allowedFields = ["Id_toko", "Nama", "Deskripsi", "Harga", "Kategori", "Slug", "Gambar"];

    public function get_barang($table = 'barang', $params = 'barang.id', $id = null)
    {
        if ($id != null) {
            $builder = $this->table($table);
            $builder->select('barang.id,barang.Nama,barang.Deskripsi,barang.Gambar,toko.Image_logo,toko.id as toko_id,barang.Harga,toko.Alamat,toko.Nama AS Toko,user.No_handphone');
            $builder->orderBy($params, 'RANDOM');
            $builder->where($params, $id);
            if ($table == 'barang') {
                $builder->join('toko', 'toko.Id_toko = barang.Id_toko');
                $barang = $builder->join('user', 'user.Id_toko = toko.Id_toko');
            } else if ($table == 'toko') {
                $builder->join('barang', 'barang.Id_toko = toko.Id_toko');
                $barang = $builder->join('user', 'user.Id_toko = toko.Id_toko');
            }
        } else {
            $builder = $this->table('barang');
            $builder->select('barang.id,barang.Nama,barang.Gambar,barang.Harga,toko.Alamat');
            $builder->orderBy('barang.id', 'RANDOM');
            $barang = $builder->join('toko', 'toko.Id_toko = barang.Id_toko');
        }

        return $barang;
    }

    public function get_count_barang($id = null)
    {
        if ($id != null) {
            $builder = $this->table('barang');
            $builder->where('toko.id', $id);
            $builder->join('toko', 'toko.Id_toko = barang.Id_toko');
            $barang = $builder->countAllResults();
        } else {
            $builder = $this->table('barang');
            $barang = $builder->countAllResults();
        }

        return $barang;
    }

    public function search($keyword)
    {
        $db = \Config\Database::connect();
        $builder = $this->table('barang');
        $builder->select('barang.Nama,barang.Gambar,barang.Harga,toko.Alamat');

        $builder->like('barang.Slug', $keyword);
        $barang = $builder->join('toko', 'toko.Id_toko = barang.Id_toko', 'left');

        return $barang;
    }

    public function search_kategori($k)
    {
        $db = \Config\Database::connect();
        $builder = $this->table('barang');
        $builder->select('barang.Nama,barang.id,barang.Gambar,barang.Harga,toko.Alamat');

        $builder->like('barang.Kategori', $k);
        $barang = $builder->join('toko', 'toko.Id_toko = barang.Id_toko', 'left');

        return $barang;
    }
}
