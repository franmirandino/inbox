<?php

use Faker\Generator as Faker;

$factory->define(App\Technical::class, function (Faker $faker) {
    return [
        'pos' 	     => rand(1,10000),
        'nombre' 	 => $faker->name,
        'telefono' 	 => $faker->phoneNumber,
        'telefono_2' => $faker->phoneNumber,        
        'canal'		 => "STD"        
    ];
});
