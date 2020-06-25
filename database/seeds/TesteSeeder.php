<?php

use Illuminate\Database\Seeder;
use App\Teste;

class TesteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Teste::class, 20)->create();
    }
}
