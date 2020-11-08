<?php

namespace App\Models;

use CodeIgniter\Model;

class WishlistModel extends Model
{
    protected $table = 'wishlist';
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $allowedFields = ["Id_toko", "Id_barang"];

    public function get($id = null, $id_toko)
    {
        if ($id != null) {
            $builder = $this->table($this->table);
            $builder->select('barang.id,barang.Nama,barang.Harga,barang.Gambar,wishlist.id as wid');
            $builder->orderBy('wishlist.id', 'DESC');
            // $builder->where('barang.id', $id);
            $builder->Where('wishlist.Id_toko', $id_toko);
            $wishlist = $builder->join('barang', 'barang.id = wishlist.Id_barang');
        } else {
            $builder = $this->table($this->table);
            $builder->select('barang.id,barang.Nama,barang.Harga,barang.Gambar,wishlist.id as wid');
            $builder->orderBy('wishlist.Id_toko', 'ASC');
            $wishlist = $builder->join('barang', 'barang.Id_toko = wishlist.Id_toko');
        }

        return $wishlist;
    }

    public function getid($id)
    {
        $builder = $this->table('wishlist');
        $wishlist = $builder->where('wishlist.Id_toko', $id);

        return $wishlist;
    }

    public function match($id, $id_toko)
    {
        $builder = $this->table('wishlist');
        $builder->where('wishlist.Id_barang', $id);
        $wishlist = $builder->where('wishlist.Id_toko', $id_toko);

        return $wishlist;
    }
}
