<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 10:17
 */

namespace App\Entities\Notification;


use App\Entities\Recipe\Menu;
use App\Entities\Recipe\Recipe;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Adoration extends Model
{
    public $timestamps = false;

    protected $table = 'adorations';

    protected $primaryKey = 'adoration_id';

    protected $fillable = [
        //FK
        'user_id',
        'recipe_id',
        'menu_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function recipe()
    {
        return $this->belongsTo(Recipe::class, 'recipe_id');
    }
    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }
    public function setuser($user)
    {
        return $this->user()->sync($user);
    }
    public function setrecipe($recipe)
    {
        return $this->recipe()->sync($recipe);
    }
    public function setmenu($menu)
    {
        return $this->menu()->sync($menu);
    }
}



