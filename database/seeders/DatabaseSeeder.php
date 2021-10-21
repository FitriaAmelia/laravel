<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(PostsTableSeeder::class);
        // $this->call(BiodatasTableSeeder::class);
        // $this->call(CobasTableSeeder::class);
        $this->call(BarangsTableSeeder::class);
        $this->call(PesanansTableSeeder::class);
        $this->call(PembelisTableSeeder::class);
        $this->call(PembeliansTableSeeder::class);
        $this->call(SuplierTableSeeder::class);

    }

}
