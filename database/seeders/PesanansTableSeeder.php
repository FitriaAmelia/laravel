<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PesanansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pesanans = [
            ['nama_pelanggan' => 'amel', 'nama_barang' => 'oreo', 'qty' => '2', 'tgl_pesan' => '2021-03-01'],
            ['nama_pelanggan' => 'dina', 'nama_barang' => 'teh', 'qty' => '5', 'tgl_pesan' => '2021-03-02'],
            ['nama_pelanggan' => 'key', 'nama_barang' => 'roti', 'qty' => '10', 'tgl_pesan' => '2021-03-03'],
            ['nama_pelanggan' => 'erin', 'nama_barang' => 'susu', 'qty' => '1', 'tgl_pesan' => '2021-03-04'],
            ['nama_pelanggan' => 'aceng', 'nama_barang' => 'kopi', 'qty' => '12', 'tgl_pesan' => '2021-03-05'],
        ];

        //masukkan data ke database
        DB::table('pesanans')->insert($pesanans);
    }
}
