<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 11:02
 */

namespace App\Entities\Recipe;


use App\Entities\Asset\Image;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public $timestamps = false;

    protected $table = 'menus';

    protected $primaryKey = 'menu_id';

    protected $fillable = [
        'menu_name',
        'menu_slug',
        //FK
        'image_id',
    ];
    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }

    public function setimage($image)
    {
        return $this->image()->sync($image);
    }
    public function collections()
    {
        return $this->belongsToMany(Collection::class, 'menus_collections', 'menu_id', 'collection_id');
    }
    public function recipes()
    {
        return $this->belongsToMany(Recipe::class, 'recipes_menus', 'menu_id', 'recipe_id');
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'users_menus', 'menu_id', 'user_id');
    }

}
