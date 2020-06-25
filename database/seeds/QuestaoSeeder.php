<?php

use App\Questao;
use Illuminate\Database\Seeder;

class QuestaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Questao::class, 100)->create();
    }
}
