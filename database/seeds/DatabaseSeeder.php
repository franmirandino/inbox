<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(OfficialsTableSeeder::class);
        $this->call(SellersTableSeeder::class);
        $this->call(TechnicalsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
    }
}
