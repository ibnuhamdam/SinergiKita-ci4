<?php

namespace App\Models;

use CodeIgniter\Model;

class TokoModel extends Model
{
    protected $table = 'toko';
    protected $useTimestamps = true;
    protected $allowedFields = ["Id_toko", "Nama", "Deskripsi", "Alamat", "Image_logo"];
}
