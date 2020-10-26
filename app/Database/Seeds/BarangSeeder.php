<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

class BarangSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        // $data = [
        //     'Id_toko' => 'Wacan26102020-aSgTgjdyAs',
        //     'Nama'    => 'Ismail Syai',
        //     'Email'   => 'Ismail@gmail.com',
        //     'Password' => 'ismail',
        //     'No_ktp' => '42312231234123141',
        //     'Alamat'  => 'Langenharjo',
        //     'No_handphone' => '08762662535212'
        // ];

        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 10; $i++) {
            $nama = $faker->name;
            $data = [
                'Id_toko' => 'qui70141168-molestiaeminima',
                'Nama'    => $nama,
                'Deskripsi'   => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'Harga' => $faker->randomNumber($nbDigits = 3, $strict = false) . '.000',
                'Kategori' => $faker->address,
                'Slug' => url_title($nama, '-', true),
                'created_at' => Time::createFromTimestamp($faker->unixTime()),
                'updated_at' => Time::now()
            ];
            $this->db->table('barang')->insert($data);
        }

        // // Simple Queries
        // $this->db->query(
        //     "INSERT INTO user ( Id_toko, Nama, Email, Password, No_ktp, Alamat, No_handphone) VALUES( :Id_toko:, :Nama:, :Email:, :Password: , :No_ktp: , :Alamat: , :No_handphone:)",
        //     $data
        // );

        // Using Query Builder

    }
}
