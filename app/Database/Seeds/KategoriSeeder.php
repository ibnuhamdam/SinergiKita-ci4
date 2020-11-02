<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

class KategoriSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            'nama' => 'lainnya',
            'created_at' => Time::now(),
            'updated_at' => Time::now()
        ];
        $this->db->table('kategori')->insert($data);
    }
}
