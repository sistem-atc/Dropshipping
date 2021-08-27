<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'value_sale',
        'measures',
        'category',
        'tax_data',
        'address_inventory',
        'img',
        'description',
        'model',
        'material',
        'user_create_id',
    ];    
}
