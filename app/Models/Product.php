<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Inventory;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'profit_margin',
        'length',
        'width',
        'height',
        'weight',
        'category',
        'address_inventory',
        'description',
        'model',
        'material',
        'user_create_id',
    ];  
    
    public function user_create_id()
    {
        return $this->hasOne(Company::class, 'id','users');
    }
}
