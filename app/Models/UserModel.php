<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'Id_user';
    protected $useTimestamps = true;
    protected $allowedFields = ["Nama", "Nama_toko", "Email", "Password", "No_ktp", "Alamat", "No_handphone"];

    public function get_login($email, $password)
    {
        return $this->db->table('user')
            ->where(array('Email' => $email, 'Password' => $password))
            ->get()->getRowArray();
    }
}
