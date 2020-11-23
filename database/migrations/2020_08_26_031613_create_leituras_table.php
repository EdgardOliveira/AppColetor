<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeiturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leituras', function (Blueprint $table) {
            $table->id();
            $table->date('mesAno');
            $table->bigInteger('anterior');
            $table->bigInteger('atual')->nullable();
            $table->double('constante');
            $table->double('residuo')->nullable();
            $table->bigInteger('medido')->nullable();
            $table->bigInteger('faturado')->nullable();
            $table->double('tarifaSemTributos');
            $table->double('tarifaComTributos');
            $table->bigInteger('media12Meses');
            $table->date('dataVencimento')->nullable();
            $table->date('dataAnterior');
            $table->date('dataAtual')->nullable();
            $table->date('dataEmissao')->nullable();
            $table->date('dataApresentacao')->nullable();
            $table->date('dataProxima')->nullable();
            $table->integer('diasConsumo')->nullable();
            $table->double('total')->nullable();
            $table->bigInteger('consumo')->nullable();
            $table->foreignId('cliente_id')->constrained('clientes');
            $table->foreignId('medidor_id')->constrained('medidores');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leituras');
    }
}
