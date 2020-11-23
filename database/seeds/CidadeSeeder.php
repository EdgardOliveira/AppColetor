<?php

use Illuminate\Database\Seeder;
use App\Cidade;
class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cidade::create([
            'nome' => 'Manaus',
        ]);
        Cidade::create([
            'nome' => 'Manacapuru',
        ]);
        Cidade::create([
            'nome' => 'Careiro',
        ]);
        Cidade::create([
            'nome' => 'Itacoatiara',
        ]);
        Cidade::create([
            'nome' => 'Presidente Figueiredo',
        ]);
    }
}
