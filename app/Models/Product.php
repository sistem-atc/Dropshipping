<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
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
}
