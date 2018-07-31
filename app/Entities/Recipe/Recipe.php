<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 11:06
 */

namespace App\Entities\Recipe;


use App\Entities\Asset\Image;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public $timestamps = false;

    protected $table = 'recipes';

    protected $primaryKey = 'recipe_id';

    protected $fillable = [
        'recipe_name',
        'recipe_description',
        'recipe_isPublic',
        'recipe_slug',
        //FK
        'user_id',
        'image_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }

    public function setuser($user)
    {
        return $this->user()->sync($user);
    }
    public function setimage($image)
    {
        return $this->image()->sync($image);
    }
    public function steps()
    {
        return $this->belongsToMany(Step::class, 'recipes_steps', 'recipe_id', 'step_id');
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'recipes_categories', 'recipe_id', 'category_id');
    }
    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'recipes_menus', 'recipe_id', 'menu_id');
    }
    public function collections()
    {
        return $this->belongsToMany(Collection::class, 'recipes_collections', 'recipe_id', 'collection_id');
    }
}

