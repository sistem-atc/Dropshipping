<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    use HasFactory;
    protected $fillable = [
        'sender',
        'recept',
        'mensagem',
    ];

    public function sender()
    {
        return $this->belongsToMany(User::class, 'sender','id');
    }

    public function recept()
    {
        return $this->belongsToMany(User::class, 'recept','id');
    }

}
