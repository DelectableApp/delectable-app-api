<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 09:37
 */

namespace App\Entities\Food;


class IngredientType
{
    public $timestamps = false;

    protected $table = 'ingredients_types';

    protected $primaryKey = 'ingredient_type_id';

    protected $fillable = [
        'ingredient_type_name',
        'image_id',
    ];

    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }
    public function ingredient()
    {
        return $this->belongsTo(Ingredient::class, 'ingredient_id');
    }
    public function setimage($image)
    {
        return $this->image()->sync($image);
    }
}