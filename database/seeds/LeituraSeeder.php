<?php

use Illuminate\Database\Seeder;
use App\Leitura;

class LeituraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Leitura::create([
            'mesAno' => '2020-05-01 00:00:00',
            'anterior' => 41390,
            'constante' => 1,
            'tarifaSemTributos' => 0.664840,
            'tarifaComTributos' => 0.886453,
            'media12Meses' => 340,
            'dataAnterior' => '2020-04-27 00:00:00',
            'cliente_id' => 1,
            'medidor_id' => 1,
        ]);
        Leitura::create([
            'mesAno' => '2020-06-01 00:00:00',
            'anterior' => 41777,
            'constante' => 1,
            'tarifaSemTributos' => 0.664840,
            'tarifaComTributos' => 0.886453,
            'media12Meses' => 349,
            'dataAnterior' => '2020-05-27 00:00:00',
            'cliente_id' => 1,
            'medidor_id' => 1,
        ]);
        Leitura::create([
            'mesAno' => '2020-07-01 00:00:00',
            'anterior' => 42119,
            'constante' => 1,
            'tarifaSemTributos' => 0.664840,
            'tarifaComTributos' => 0.886453,
            'media12Meses' => 350,
            'dataAnterior' => '2020-06-25 00:00:00',
            'cliente_id' => 1,
            'medidor_id' => 1,
        ]);
        Leitura::create([
            'mesAno' => '2020-08-01 00:00:00',
            'anterior' => 42528,
            'constante' => 1,
            'tarifaSemTributos' => 0.664840,
            'tarifaComTributos' => 0.886453,
            'media12Meses' => 358,
            'dataAnterior' => '2020-07-28 00:00:00',
            'cliente_id' => 1,
            'medidor_id' => 1,
        ]);
    }
}
