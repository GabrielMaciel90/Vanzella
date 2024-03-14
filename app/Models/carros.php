<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carros extends Model
{
    protected $table = 'carros';
    protected $filltable = ['nome', 'marca', 'descricao', 'preco', 'tempo_rodando', 'data_lancamento', 'km_rodado'];
}
