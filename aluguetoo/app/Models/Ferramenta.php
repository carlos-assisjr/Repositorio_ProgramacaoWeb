<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ferramenta extends Model
{
    protected $table = 'ferramentas';

    public $incrementing = true;

    protected $fillable = [
        'nome',
        'marca',
        'numero_serie',
        'descricao',
        'loja',
        'valor_diaria',
        'categoria_id'
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
}