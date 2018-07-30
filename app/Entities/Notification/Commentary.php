<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 10:47
 */

namespace App\Entities\Notification;


class Commentary
{
    public $timestamps = false;

    protected $table = 'commentaries';

    protected $primaryKey = 'commentary_id';

    protected $fillable = [
        'commentary_text',
        'commentary_isValid',
        //FK
        'user_id',
        'menu_id',
        'recipe_id',

    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }
    public function recipe()
    {
        return $this->belongsTo(Recipe::class, 'recipe_id');
    }

    public function setuser($user)
    {
        return $this->user()->sync($user);
    }
    public function setmenu($menu)
    {
        return $this->menu()->sync($menu);
    }
    public function setrecipe($recipe)
    {
        return $this->recipe()->sync($recipe);
    }
}
