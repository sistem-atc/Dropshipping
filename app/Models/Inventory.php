<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $fillable = [
        'nf',
        'products',
        'qtd',
        'cep',
        'unitary_value',
        'total_value',
        'tax',
        'user_create_id',
    ];    
}
