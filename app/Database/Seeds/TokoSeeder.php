<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

class TokoSeeder extends \CodeIgniter\Database\Seeder
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
        for ($i = 0; $i < 5; $i++) {
            $data = [
                'Id_toko' => 'est56573394-providentut',
                'Nama'    => $faker->name,
                'Deskripsi'   => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'Alamat' => $faker->address,
                'created_at' => Time::createFromTimestamp($faker->unixTime()),
                'updated_at' => Time::now()
            ];
            $this->db->table('toko')->insert($data);
        }

        // // Simple Queries
        // $this->db->query(
        //     "INSERT INTO user ( Id_toko, Nama, Email, Password, No_ktp, Alamat, No_handphone) VALUES( :Id_toko:, :Nama:, :Email:, :Password: , :No_ktp: , :Alamat: , :No_handphone:)",
        //     $data
        // );

        // Using Query Builder

    }
}
