<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Key extends Model
{
    use HasFactory;
    protected $table = 'keys';
    protected $fillable = [
        'id_user',
        'name_dp',
        'appid',
        'secretkey',
    ];

    public function id_user()
    {
        return $this->hasOne(Company::class, 'id','users');
    }
}
