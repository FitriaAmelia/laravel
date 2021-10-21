<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $barangs = [
            ['nama' => 'susu', 'varian' => 'stroberi', 'harga_beli' => '4500', 'harga_jual' => '5000'],
            ['nama' => 'oreo', 'varian' => 'vanila', 'harga_beli' => '1500', 'harga_jual' => '2000'],
            ['nama' => 'teh', 'varian' => 'melati', 'harga_beli' => '1000', 'harga_jual' => '1500'],
            ['nama' => 'roti', 'varian' => 'cokelat', 'harga_beli' => '2000', 'harga_jual' => '3000'],
            ['nama' => 'kopi', 'varian' => 'gula aren', 'harga_beli' => '1500', 'harga_jual' => '2000'],
        ];

        //masukan data ke database
        DB::table('barangs')->insert($barangs);
    }
}
