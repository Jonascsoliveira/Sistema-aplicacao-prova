<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Questao;
use Faker\Generator as Faker;

$factory->define(Questao::class, function (Faker $faker) {
    return [
        'enunciado' => $faker->words($faker->numberBetween(1,10), true). '?',
        'respostaA' => $faker->words($faker->numberBetween(1,4), true),
        'respostaB' => $faker->words($faker->numberBetween(1,4), true),
        'respostaC' => $faker->words($faker->numberBetween(1,4), true),
        'respostaD' => $faker->words($faker->numberBetween(1,4), true),
        'respostaE' => $faker->words($faker->numberBetween(1,4), true),
        'resposta_correta' => $faker->randomElement(['A','B','C','D','E']),
        'valor_questao' => $faker->numberBetween(8,10),
        'teste_id' => $faker->numberBetween(1, 20)
    ];
});
