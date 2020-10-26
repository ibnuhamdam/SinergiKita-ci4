<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

class UserSeeder extends \CodeIgniter\Database\Seeder
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
        for ($i = 0; $i < 15; $i++) {
            $data = [
                'Id_toko' => $faker->word . $faker->randomNumber($nbDigits = 8, $strict = false) . '-' . $faker->word . $faker->word,
                'Nama'    => $faker->name,
                'Email'   => $faker->email,
                'Password' => $faker->password,
                'No_ktp' => $faker->randomNumber($nbDigits = 8, $strict = false) . $faker->randomNumber($nbDigits = 5, $strict = false),
                'Alamat'  => $faker->address,
                'No_handphone' => $faker->phoneNumber,
                'created_at' => Time::createFromTimestamp($faker->unixTime()),
                'updated_at' => Time::now()
            ];
            $this->db->table('user')->insert($data);
        }

        // // Simple Queries
        // $this->db->query(
        //     "INSERT INTO user ( Id_toko, Nama, Email, Password, No_ktp, Alamat, No_handphone) VALUES( :Id_toko:, :Nama:, :Email:, :Password: , :No_ktp: , :Alamat: , :No_handphone:)",
        //     $data
        // );

        // Using Query Builder

    }
}
