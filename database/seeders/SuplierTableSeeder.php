<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SuplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $suplier = [
            ['nama' => 'amel', 'alamat' => 'sadang pasantren', 'kode_pos' => '40225', 'kota' => 'Bandung'],
            ['nama' => 'dina', 'alamat' => 'bbk nugraha', 'kode_pos' => '40223', 'kota' => 'Bandung'],
            ['nama' => 'key', 'alamat' => 'rancamanyar', 'kode_pos' => '40224', 'kota' => 'Bandung'],
            ['nama' => 'erin', 'alamat' => 'raja pancing', 'kode_pos' => '40222', 'kota' => 'Bandung'],
            ['nama' => 'aceng', 'alamat' => 'rancamanyar', 'kode_pos' => '40226', 'kota' => 'Bandung'],
        ];

        //masukkan data ke database
        DB::table('suplier')->insert($suplier);
    }
}
