<?php

namespace App\Models;

use CodeIgniter\Model;
use phpDocumentor\Reflection\Types\Null_;

class TokoModel extends Model
{
    protected $table = 'toko';
    protected $useTimestamps = true;
    protected $allowedFields = ["Id_toko", "Nama", "Deskripsi", "Alamat", "Image_logo"];

    public function get_user($id = null)
    {
        $db = \Config\Database::connect();
        if ($id != null) {
            $builder = $this->table('toko');
            $builder->select('toko.id,toko.Nama,toko.Image_logo,toko.Deskripsi,toko.Alamat,user.No_handphone,toko.created_at');
            $builder->where('toko.id', $id);
            $user = $builder->join('user', 'user.Id_toko = toko.Id_toko');
        } else {
            $builder = $this->table('toko');
            $builder->select('toko.id,toko.Nama,toko.Image_logo,toko.Deskripsi,toko.Alamat,user.No_handphone,toko.created_at');
            $builder->orderBy('toko.id', 'RANDOM');
            $user = $builder->join('user', 'user.Id_toko = toko.Id_toko');
        }

        return $user;
    }

    
}
