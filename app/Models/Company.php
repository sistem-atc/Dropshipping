<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'companies';
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
    public function token()
    {
        return $this->hasMany(Token::class, 'company');
    }

}
