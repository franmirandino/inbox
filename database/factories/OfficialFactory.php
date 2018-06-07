<?php

use Faker\Generator as Faker;

$factory->define(App\Official::class, function (Faker $faker) {
    return [
        'pos' 	     => rand(1,10000),
        'nombre' 	 => $faker->name,
        'telefono' 	 => $faker->phoneNumber,
        'telefono_2' => $faker->phoneNumber,
        'cargo'		 => $faker->randomElement(['VENDEDOR', 'TÉCNICO', 'TÉCNICO-AYUDANTE']),
        'canal'		 => $faker->randomElement(['4X4', 'PDA', 'STD', 'DTH', 'LYG'])
    ];
});
