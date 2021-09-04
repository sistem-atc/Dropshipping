<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    use HasFactory;
    protected $fillable = [
        'company',
        'access_token',
        'expires_in',
        'user_id',
        'refresh_token',
    ];    
}
