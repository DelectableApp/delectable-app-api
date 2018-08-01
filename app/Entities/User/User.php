<?php

namespace App\Entities\User;

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
    protected $primaryKey = 'user_id';
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
        'user_description',
        'user_slug',
        //FK
        'user_avatar',
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


    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'users_menus', 'user_id', 'menu_id');
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'users_categories', 'user_id', 'category_id');
    }
    public function constraints()
    {
        return $this->belongsToMany(Constraint::class, 'users_constraints', 'user_id', 'constraint_id');
    }

    public function setAvatar($user_avatar)
    {
        return $this->avatar()->associate($user_avatar);
    }
    public function setCountry($country_id)
    {
        return $this->country()->associate($country_id);
    }
    public function setLanguage($language_id)
    {
        return $this->language()->associate($language_id);
    }
 public function setRole($role_Id)
    {
        return $this->role()->associate($role_Id);
    }
}
