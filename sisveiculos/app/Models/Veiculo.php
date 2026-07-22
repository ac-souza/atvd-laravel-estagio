<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $table = 'veiculos';
    public $timestamps = false;

    protected $fillable = [
        'placa',
        'cor',
        'ano',
        'modelo_id'
    ];

    public function modelo()
    {
        return $this->belongsTo(Modelo::class, 'modelo_id');
    }
}
