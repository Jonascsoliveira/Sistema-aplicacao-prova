<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teste extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'pontos_aprovacao'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function questao()
    {
        return $this->hasMany(Questao::class);
    }
}
