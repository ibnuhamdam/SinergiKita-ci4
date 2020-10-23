<?php

namespace App\Models;

use CodeIgniter\Model;

class TokoModel extends Model
{
    protected $table = 'toko';
    protected $primaryKey = 'Id_toko';
    protected $useTimestamps = true;
    protected $allowedFields = ["Nama", "Deskripsi", "Alamat", "Image_logo"];
}
