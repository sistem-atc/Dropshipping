<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use App\Models\Product;
=======
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d

class Inventory extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table = 'inventories';
=======
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
    protected $fillable = [
        'nf',
        'serie',
        'total_value',
        'cfop',
        'tax',
        'namecompany',
        'cpf_cnpj',
        'ie',
        'cod_produto',
        'unitary_value',
        'qtd',
        'user_create_id',
    ];    
<<<<<<< HEAD

    public function cod_produto()
    {
        return $this->hasOne(Product::class, 'id','cod_produto');
    }

    public function user_create_id()
    {
        return $this->hasOne(Company::class, 'id','users');
    }
=======
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
}
