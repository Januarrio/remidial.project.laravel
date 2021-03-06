<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(KendaraanTableSeeder::class);
        $this->call(PelangganTableSeeder::class);
        $this->call(SopirTableSeeder::class);
        $this->call(TarifTableSeeder::class);
        $this->call(TransaksiTableSeeder::class);
    }
}
