<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';
    protected $fillable = [
        'name',
        'register',
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
