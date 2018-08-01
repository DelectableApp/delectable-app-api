<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 10:53
 */

namespace App\Entities\Recipe;


use App\User;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    public $timestamps = false;

    protected $table = 'collections';

    protected $primaryKey = 'collection_id';

    protected $fillable = [
        'collection_name',
        'collection_slug',
        //FK
        'user_id',

    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function setuser($user)
    {
        return $this->user()->sync($user);
    }
    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'menus_collections', 'collection_id', 'menu_id');
    }
    public function recipes()
    {
        return $this->belongsToMany(Recipe::class, 'recipes_collections', 'collection_id', 'recipe_id');
    }
}