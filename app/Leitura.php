<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Leitura extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'anoMes', 'anterior', 'atual', 'constante', 'residuo', 'medido', 'faturado', 'dataAnterior', 'dataAtual',
        'dataEmissao', 'dataApresentacao', 'dataProxima', 'diasConsumo', 'consumo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [

    ];

    public function cliente()
    {
        return $this->hasOne('App\Cliente');
    }

    public function medidor()
    {
        return $this->hasOne('App\Medidor');
    }
}
