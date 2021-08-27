<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'cnpj',
        'phone',
        'cep',
        'address',
        'number',
        'city',
        'uf',
        'appid',
        'secretkey',
    ];
}
