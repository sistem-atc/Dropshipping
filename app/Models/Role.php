<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'menus',
        'home',
        'anuncios',
        'mensagensML',
        'mensagensSellers',
        'estoque',
        'pedidos',
        'relatov',
        'cadastroA',
        'cadastroP',
        'cadastroS',
        'roles',
    ];   
}
