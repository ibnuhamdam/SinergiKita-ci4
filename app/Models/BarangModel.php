<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $allowedFields = ["Id_toko", "Nama", "Deskripsi", "Harga", "Kategori", "Slug", "Gambar"];

    public function get_barang()
    {
        $builder = $this->table('barang');
        $builder->select('barang.Nama,barang.Gambar,barang.Harga,toko.Alamat');
        $builder->orderBy('barang.id', 'RANDOM');
        $barang = $builder->join('toko', 'toko.Id_toko = barang.Id_toko');

        // var_dump($db->getLastQuery());
        return $barang;
    }

    public function search($keyword)
    {
        $db = \Config\Database::connect();
        $builder = $this->table('barang');
        $builder->select('barang.Nama,barang.Gambar,barang.Harga,toko.Alamat');

        $builder->like('barang.Slug', $keyword);
        $barang = $builder->join('toko', 'toko.Id_toko = barang.Id_toko', 'left');

        // echo $db->getLastQuery()
        return $barang;
    }
}
