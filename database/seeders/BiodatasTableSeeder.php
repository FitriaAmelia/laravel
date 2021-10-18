<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class BiodatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $biodatas = [
            ['name' => 'Dian', 'bornDate' => '1999-10-10', 'gender' => 'Laki-laki', 'address' => 'Bandung', 'religion' => 'Islam', 'age' => '17', 'hobby' => 'Mancing'],
            ['name' => 'Krisna', 'bornDate' => '2000-09-09', 'gender' => 'Laki-laki', 'address' => 'Jakarta', 'religion' => 'Islam', 'age' => '20', 'hobby' => 'cating'],
            ['name' => 'Rani', 'bornDate' => '1998-08-08', 'gender' => 'Perempuan', 'address' => 'Solo', 'religion' => 'Islam', 'age' => '23', 'hobby' => 'Gamers'],
            ['name' => 'Kirana', 'bornDate' => '1980-04-03', 'gender' => 'Perempuan', 'address' => 'Aceh', 'religion' => 'Islam', 'age' => '15', 'hobby' => 'Tiktokan'],
            ['name' => 'Kinanti', 'bornDate' => '2004-01-02', 'gender' => 'Perempuan', 'address' => 'Batak', 'religion' => 'Islam', 'age' => '30', 'hobby' => 'Nyanyi'],
            ['name' => 'Dina', 'bornDate' => '2004-12-04', 'gender' => 'Perempuan', 'address' => 'Bandung', 'religion' => 'Islam', 'age' => '17', 'hobby' => 'Membaca'],

        ];
// masukkan data ke database
        DB::table('biodatas')->insert($biodatas);

    }
}
