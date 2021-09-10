<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
    use HasFactory;
    protected $table = 'imagems';
    protected $fillable = [
    'idproduct',
    'images',
    ];   
    
    public function idproduct()
    {
        return $this->hasOne(Company::class, 'id','products');
    }
}
