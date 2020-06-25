<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Teste;
use Faker\Generator as Faker;

$factory->define(Teste::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1, 10),
        'name'  => $faker->words($faker->numberBetween(1,3), true),
        'pontos_aprovacao' => $faker->numberBetween(99,101)
    ];
});
