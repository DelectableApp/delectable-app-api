<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 09:37
 */

namespace App\Entities\Food;


use App\Entities\Asset\Image;
use Illuminate\Database\Eloquent\Model;

class IngredientType extends Model
{
    public $timestamps = false;

    protected $table = 'ingredients_types';

    protected $primaryKey = 'ingredient_type_id';

    protected $fillable = [
        'ingredient_type_name',
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
    public function diets()
    {
        return $this->belongsToMany(Diet::class, 'ingredients_types_diets', 'ingredient_type_id', 'diet_id');
    }
}