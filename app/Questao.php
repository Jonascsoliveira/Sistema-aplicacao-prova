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
        'valor_questao',
        'teste_id'
    ];

    public function teste()
    {
        return $this->belongsTo(Teste::class);
    }
}
