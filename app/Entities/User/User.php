<?php

namespace App;

use App\Entities\Asset\Image;
use App\Entities\I18n\Country;
use App\Entities\I18n\Language;
use App\Entities\User\Role;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $timestamps = true;
    protected $fillable = [
        'user_first_name',
        'user_last_name',
        'user_address',
        'user_gender',
        'user_birth_date',
        'user_phone',
        'user_email',
        'user_login',
        'password',
        'user_avatar',
        'user_description',
        'user_slug',
        'country_id',
        'language_id',
        'role_id',

    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function avatar()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id');
    }
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }


    public function setCountry($country_id)
    {
        return $this->country()->associate($country_id);
    }
    public function setLanguage($language_id)
    {
        return $this->language()->associate($language_id);
    }
 public function setRole($roleId)
    {
        return $this->role()->associate($roleId);
    }
}
