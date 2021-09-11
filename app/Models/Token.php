<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table = 'tokens';
    protected $fillable = [
        'recording_user',
=======
    protected $fillable = [
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
        'company',
        'access_token',
        'expires_in',
        'user_id',
        'refresh_token',
<<<<<<< HEAD
    ];  
    
=======
    ];    
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
}
