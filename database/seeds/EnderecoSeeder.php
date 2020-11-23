<?php

use Illuminate\Database\Seeder;
use App\Endereco;
class EnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Endereco::create([
            'cep' => '69050100',
            'logradouro' => 'Avenida Brasil',
            'numero' => '25',
            'complemento' => 'Condomínio Compensa',
            'bairro' => 'Compensa',
            'cidade_id' => 1,
            'uf' => 'AM',
            'medidor_id' => 1,
        ]);
        Endereco::create([
            'cep' => '69049148',
            'logradouro' => 'Rua 21',
            'numero' => '1',
            'complemento' => 'Conjunto Vila Rica',
            'bairro' => 'Cidade Nova',
            'cidade_id' => 1,
            'uf' => 'AM',
            'medidor_id' => 2,
        ]);
        Endereco::create([
            'cep' => '69010125',
            'logradouro' => 'Rua 19',
            'numero' => '1',
            'complemento' => 'Conjunto Vila Suiça',
            'bairro' => 'Tarumã',
            'cidade_id' => 1,
            'uf' => 'AM',
            'medidor_id' => 3,
        ]);
        Endereco::create([
            'cep' => '69050001',
            'logradouro' => 'Avenida das Torres',
            'numero' => '2525',
            'complemento' => 'Condomínio Japonês, Apartamento 103B',
            'bairro' => 'Parque 10 de Dezembro',
            'cidade_id' => 1,
            'uf' => 'AM',
            'medidor_id' => 4,
        ]);
    }
}
