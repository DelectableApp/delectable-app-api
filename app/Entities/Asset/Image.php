<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 17/07/2018
 * Time: 14:58
 */

namespace App\Entities\Asset;


use App\Entities\Recipe\Category;
use Illuminate\Foundation\Auth\User;

class Image
{
    public $timestamps = false;

    protected $table = 'images';

    protected $primaryKey = 'image_id';

    protected $fillable = [
        'image_name',
        'image_desc',
        'image_isValid',
        //FK
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function video()
    {
        return $this->belongsTo(Video::class, 'video_id');
    }
    public function ingredient_type()
    {
        return $this->belongsTo(IngredientType::class, 'ingredient_type_id');
    }
    public function ingredient()
    {
        return $this->belongsTo(Ingredient::class, 'ingredient_id');
    }
    public function utensil()
    {
        return $this->belongsTo(Utensil::class, 'utensil_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
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

}