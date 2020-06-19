<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questoes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('enunciado');
            $table->string('respostaA');
            $table->string('respostaB');
            $table->string('respostaC');
            $table->string('respostaD');
            $table->string('respostaE');
            $table->string('resposta_correta');
            $table->double('valor_questao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questoes');
    }
}
