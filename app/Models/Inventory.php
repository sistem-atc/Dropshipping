<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Inventory extends Model
{
    use HasFactory;
    protected $table = 'inventories';
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

    public function cod_produto()
    {
        return $this->hasOne(Product::class, 'id','cod_produto');
    }

    public function user_create_id()
    {
        return $this->hasOne(Company::class, 'id','users');
    }
}
