<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamento extends ModelHelper
{
    use HasFactory;

    protected $fillable =
    [
        "gasto_localidade",
        "gasto_premio",
        "lucro_esperado",
        "preço_ingresso",
        "preço_transmissao",
        "campeonato_id"
    ];

    public function patrocinadores()
    {
        return $this->belongsToMany
        (
            Patrocinador::class,
            'orcamentos_patrocinadores',
            'orcamento_id',
            'patrocinador_id',
            'id',
            'id'
        );
    }

    public function campeonato()
    {
        return $this->belongsTo
        (
            Campeonato::class,
            'campeonato_id',
            'id',
        );
    }
}