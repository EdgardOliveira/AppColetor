<?php

use Illuminate\Database\Seeder;
use App\Cliente;
class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Cliente::create([
            'nome_empresa' => 'Edgard Anselmo Ferreira Oliveira',
            'cpf_cnpj' => '68921545632', 'diaVencimento' => 10,
            'medidor_id' => 1
        ]);
        Cliente::create([
            'nome_empresa' => 'Thiago Albuquerque Lins',
            'cpf_cnpj' => '12345678912', 'diaVencimento' => 15,
            'medidor_id' => 2
        ]);
        Cliente::create([
            'nome_empresa' => 'Marcos Silva Oliveira',
            'cpf_cnpj' => '32165498732', 'diaVencimento' => 20,
            'medidor_id' => 3
        ]);
        Cliente::create([
            'nome_empresa' => 'Marinho Alencar Neto',
            'cpf_cnpj' => '98765432132', 'diaVencimento' => 25,
            'medidor_id' => 4
        ]);
        Cliente::create([
            'nome_empresa' => 'João Guilherme',
            'cpf_cnpj' => '15995112363', 'diaVencimento' => 05,
            'medidor_id' => 5
        ]);
    }
}
