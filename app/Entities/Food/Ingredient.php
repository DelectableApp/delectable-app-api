<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 09:42
 */

namespace App\Entities\Food;


class Ingredient
{
    public $timestamps = false;

    protected $table = 'ingredients';

    protected $primaryKey = 'ingredient_id';

    protected $fillable = [
        'ingredient_name',
        'ingredient_isValid',
        //FK
        'ingredient_type_id',
        'image_id',
    ];

    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }
    public function ingredient_type()
    {
        return $this->belongsTo(IngredientType::class, 'ingredient_type_id');
    }
    public function setimage($image)
    {
        return $this->image()->sync($image);
    }
    public function setingredient_type($ingredient_type)
    {
        return $this->ingredient_type()->sync($ingredient_type);
    }
}

