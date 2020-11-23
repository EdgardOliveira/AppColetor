<?php

use Illuminate\Database\Seeder;
use App\Permissao;

class PermissaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //dando permissões para um usuário do CMS (Usuário Id 2, edgard@gmail.com)
        DB::table('permissoes')->insert([
            'usuario_id' => 2,
            'recurso_id' => 1,
            'consultar' => true,
            'cadastrar' => true,
            'atualizar' => true,
            'excluir' => true,
        ]);
        DB::table('permissoes')->insert([
            'usuario_id' => 2,
            'recurso_id' => 2,
            'consultar' => true,
            'cadastrar' => true,
            'atualizar' => true,
            'excluir' => true,
        ]);
        DB::table('permissoes')->insert([
            'usuario_id' => 2,
            'recurso_id' => 3,
            'consultar' => true,
            'cadastrar' => true,
            'atualizar' => true,
            'excluir' => true,
        ]);
        DB::table('permissoes')->insert([
            'usuario_id' => 2,
            'recurso_id' => 4,
            'consultar' => true,
            'cadastrar' => true,
            'atualizar' => true,
            'excluir' => true,
        ]);
        DB::table('permissoes')->insert([
            'usuario_id' => 2,
            'recurso_id' => 5,
            'consultar' => true,
            'cadastrar' => true,
            'atualizar' => true,
            'excluir' => true,
        ]);
        DB::table('permissoes')->insert([
            'usuario_id' => 2,
            'recurso_id' => 5,
            'consultar' => true,
            'cadastrar' => true,
            'atualizar' => true,
            'excluir' => true,
        ]);
        DB::table('permissoes')->insert([
            'usuario_id' => 2,
            'recurso_id' => 6,
            'consultar' => true,
            'cadastrar' => true,
            'atualizar' => true,
            'excluir' => true,
        ]);
        DB::table('permissoes')->insert([
            'usuario_id' => 2,
            'recurso_id' => 7,
            'consultar' => true,
            'cadastrar' => true,
            'atualizar' => true,
            'excluir' => true,
        ]);
        DB::table('permissoes')->insert([
            'usuario_id' => 2,
            'recurso_id' => 8,
            'consultar' => true,
            'cadastrar' => true,
            'atualizar' => true,
            'excluir' => true,
        ]);
    }
}
