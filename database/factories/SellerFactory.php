<?php

use Faker\Generator as Faker;

$factory->define(App\Seller::class, function (Faker $faker) {
    return [
        'pos' 	     => rand(1,10000),
        'nombre' 	 => $faker->name,
        'telefono' 	 => $faker->phoneNumber,
        'telefono_2' => $faker->phoneNumber,        
        'canal'		 => $faker->randomElement(['4X4', 'PDA', 'DTH', 'LYG'])
    ];
});
