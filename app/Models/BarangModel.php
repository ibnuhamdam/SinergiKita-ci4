<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    protected $useTimestamps = true;
    protected $allowedFields = ["Id_toko", "Nama", "Deskripsi", "Harga", "Kategori", "Slug", "Gambar"];
}
