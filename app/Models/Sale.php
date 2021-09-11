<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table = 'sales';
=======
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
    protected $fillable = [
        'id_request',
        'cod_rastreio',
        'id_anuncio',
        'product',
        'id_buyer',
        'status',
        'tipo_envio',
<<<<<<< HEAD
    ]; 
    
    public function product()
    {
        return $this->hasOne(Company::class, 'id','products');
    }
=======
    ];    
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
}
