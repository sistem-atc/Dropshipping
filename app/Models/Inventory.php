<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $fillable = [
        'nf',
        'serie',
        'total_value',
        'cfop',
        'tax',
        'namecompany',
        'cpf_cnpj',
        'ie',
        'cod_produto',
        'unitary_value',
        'qtd',
        'user_create_id',
    ];    
}
