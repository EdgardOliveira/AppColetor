<?php

use Illuminate\Database\Seeder;
use App\Recurso;
class RecursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Recurso::create([
            'descricao' => 'usuarios'
        ]);
        Recurso::create([
            'descricao' => 'clientes'
        ]);
        Recurso::create([
            'descricao' => 'medidores'
        ]);
        Recurso::create([
            'descricao' => 'cidades'
        ]);
        Recurso::create([
            'descricao' => 'enderecos'
        ]);
        Recurso::create([
            'descricao' => 'leituras'
        ]);
        Recurso::create([
            'descricao' => 'recursos'
        ]);
        Recurso::create([
            'descricao' => 'permissoes'
        ]);
        Recurso::create([
            'descricao' => 'grupos'
        ]);
    }
}
