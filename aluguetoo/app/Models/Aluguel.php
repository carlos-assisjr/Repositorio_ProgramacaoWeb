<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluguel extends Model
{
    protected $table = 'alugueis';

    public $incrementing = true;

    protected $fillable = [
        'cliente_id',
        'status'];
}
