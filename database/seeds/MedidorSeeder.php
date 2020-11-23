<?php

use Illuminate\Database\Seeder;
use App\Medidor;
class MedidorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medidores')->insert([
            'numero' => '10236600',
            'grupo' => 'B',
            'classe' => 'RESIDENCIAL',
            'ligacao' => 'TRIFÁSICA',
            'faturamento' => 'NORMAL',
            'modalidade' => 'CONVENCIONAL',
            'status' => 'ATIVA',
        ]);
        DB::table('medidores')->insert([
            'numero' => '10236601',
            'grupo' => 'B',
            'classe' => 'RESIDENCIAL',
            'ligacao' => 'TRIFÁSICA',
            'faturamento' => 'NORMAL',
            'modalidade' => 'CONVENCIONAL',
            'status' => 'ATIVA',
        ]);
        DB::table('medidores')->insert([
            'numero' => '10236603',
            'grupo' => 'B',
            'classe' => 'RESIDENCIAL',
            'ligacao' => 'TRIFÁSICA',
            'faturamento' => 'NORMAL',
            'modalidade' => 'CONVENCIONAL',
            'status' => 'ATIVA',
        ]);
        DB::table('medidores')->insert([
            'numero' => '10236604',
            'grupo' => 'B',
            'classe' => 'RESIDENCIAL',
            'ligacao' => 'TRIFÁSICA',
            'faturamento' => 'NORMAL',
            'modalidade' => 'CONVENCIONAL',
            'status' => 'ATIVA',
        ]);
        DB::table('medidores')->insert([
            'numero' => '10236605',
            'grupo' => 'B',
            'classe' => 'RESIDENCIAL',
            'ligacao' => 'TRIFÁSICA',
            'faturamento' => 'NORMAL',
            'modalidade' => 'CONVENCIONAL',
            'status' => 'ATIVA',
        ]);
    }
}
