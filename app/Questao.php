<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    protected $table = 'questoes';

    protected $fillable = [
        'enunciado',
        'respostaA',
        'respostaB',
        'respostaC',
        'respostaD',
        'respostaE',
        'resposta_correta',
        'teste_id'
    ];
}
