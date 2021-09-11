<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table = 'roles';
=======
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
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
