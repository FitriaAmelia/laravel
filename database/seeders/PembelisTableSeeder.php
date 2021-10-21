<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pembelis = [
            ['nama' => 'amel', 'jns_kelamin' => 'perempuan', 'alamat' => 'sadang pasantren', 'kode_pos' => '40225', 'kota' => 'Bandung', 'tgl_lahir' => '2004-01-28'],
            ['nama' => 'dina', 'jns_kelamin' => 'perempuan', 'alamat' => 'bbk nugraha', 'kode_pos' => '40223', 'kota' => 'Bandung', 'tgl_lahir' => '2004-12-04'],
            ['nama' => 'key', 'jns_kelamin' => 'perempuan', 'alamat' => 'rancamanyar', 'kode_pos' => '40224', 'kota' => 'Bandung', 'tgl_lahir' => '2005-01-15'],
            ['nama' => 'erin', 'jns_kelamin' => 'perempuan', 'alamat' => 'raja pancing', 'kode_pos' => '40222', 'kota' => 'Bandung', 'tgl_lahir' => '2003-10-13'],
            ['nama' => 'aceng', 'jns_kelamin' => 'laki-laki', 'alamat' => 'rancamanyar', 'kode_pos' => '40226', 'kota' => 'Bandung', 'tgl_lahir' => '2003-08-10'],
        ];

        //masukkan data ke database
        DB::table('pembelis')->insert($pembelis);
    }
}
