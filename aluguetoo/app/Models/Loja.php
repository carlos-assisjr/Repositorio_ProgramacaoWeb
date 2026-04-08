<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    use HasFactory;

    protected $table = 'lojas';

    protected $fillable = [
        'nome',
        'endereco',
        'cidade',
        'estado',
        'cep'
    ];
        public function aluguel()
    {
        return $this->belongsTo(Aluguel::class, 'aluguel_id');
    }

    public function ferramenta()
    {
        return $this->belongsTo(Ferramenta::class, 'ferramenta_id');
    }

    public function lojaRetirada()
    {
        return $this->belongsTo(Loja::class, 'loja_retirada_id');
    }

    public function lojaDevolucao()
    {
        return $this->belongsTo(Loja::class, 'loja_devolucao_id');
    }
}