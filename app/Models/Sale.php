<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_request',
        'cod_rastreio',
        'id_anuncio',
        'product',
        'id_buyer',
        'status',
        'tipo_envio',
    ];    
}
