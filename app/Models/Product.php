<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use App\Models\Inventory;
=======
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d

class Product extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table = 'products';
=======
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
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
<<<<<<< HEAD
    ];  
    
    public function user_create_id()
    {
        return $this->hasOne(Company::class, 'id','users');
    }
=======
    ];    
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
}
