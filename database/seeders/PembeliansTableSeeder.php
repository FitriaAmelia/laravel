<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PembeliansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pembelians = [
            ['nama_barang' => 'oreo', 'nama_suplier' => 'altaf', 'qty' => '2', 'tgl' => '2021-04-01'],
            ['nama_barang' => 'teh', 'nama_suplier' => 'kidam', 'qty' => '5', 'tgl' => '2021-04-02'],
            ['nama_barang' => 'roti', 'nama_suplier' => 'altaf', 'qty' => '10', 'tgl' => '2021-04-03'],
            ['nama_barang' => 'susu', 'nama_suplier' => 'kidam', 'qty' => '1', 'tgl' => '2021-04-04'],
            ['nama_barang' => 'kopi', 'nama_suplier' => 'altaf', 'qty' => '12', 'tgl' => '2021-04-05'],
        ];

        //masukkan data ke database
        DB::table('pembelians')->insert($pembelians);
    }
}
