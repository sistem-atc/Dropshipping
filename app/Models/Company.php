<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table = 'companies';
=======
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
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
<<<<<<< HEAD

    public function token()
    {
        return $this->hasMany(Token::class, 'company');
    }

=======
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
}
