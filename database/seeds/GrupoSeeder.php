<?php

use Illuminate\Database\Seeder;
use App\Grupo;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grupo::create([
            'descricao' => 'Administradores'
        ]);
        Grupo::create([
            'descricao' => 'Gerentes'
        ]);
        Grupo::create([
            'descricao' => 'Atendentes'
        ]);
        Grupo::create([
            'descricao' => 'Leituristas'
        ]);
    }
}
