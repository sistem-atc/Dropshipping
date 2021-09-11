<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Key extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table = 'keys';
=======
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
    protected $fillable = [
        'id_user',
        'name_dp',
        'appid',
        'secretkey',
    ];
<<<<<<< HEAD

    public function id_user()
    {
        return $this->hasOne(Company::class, 'id','users');
    }
=======
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
}
