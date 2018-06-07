<?php

use Faker\Generator as Faker;

$factory->define(App\Service::class, function (Faker $faker) {
    return [
    	'nro_servicio' 			=> rand(1,10000),
        'nro_solicitud'			=> rand(1,10000),
        'motivo'				=> $faker->name,
        'cliente'				=> $faker->name,
        'observaciones_agenda'  => $faker->sentence,
        'lugar'					=> $faker->name,
        'region'				=> $faker->name    
    ];
});
