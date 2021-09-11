<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table = 'imagems';
    protected $fillable = [
    'idproduct',
    'images',
    ];   
    
    public function idproduct()
    {
        return $this->hasOne(Company::class, 'id','products');
    }
=======
    protected $fillable = [
    'idproduct',
    'images',
    ];    
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
}
