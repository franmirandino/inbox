<?php

use Illuminate\Database\Seeder;

class TechnicalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Technical::class, 100)->create();        
    }
}
