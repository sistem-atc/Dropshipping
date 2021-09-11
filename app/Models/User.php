<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
<<<<<<< HEAD
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
=======
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
<<<<<<< HEAD
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
=======
    use HasApiTokens, HasFactory, Notifiable;
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d

    /**
     * The attributes that are mass assignable.
     *
<<<<<<< HEAD
     * @var string[]
=======
     * @var array
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
     */
    protected $fillable = [
        'company',
        'name',
        'email',
        'password',
        'cpf',
        'phone',
        'cep',
        'address',
        'number',
        'city',
        'uf',
        'ative',
        'paper',
<<<<<<< HEAD
        'profile_photo_path',
    ];

    /**
     * The attributes that should be hidden for serialization.
=======
    ];

    /**
     * The attributes that should be hidden for arrays.
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
<<<<<<< HEAD
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
=======
    ];

    /**
     * The attributes that should be cast to native types.
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
<<<<<<< HEAD

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function company()
    {
        return $this->hasOne(Company::class, 'id','company');
    }

        public function paper()
    {
        return $this->hasOne(Role::class, 'id','paper');
    }
=======
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
}
