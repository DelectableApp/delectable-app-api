<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 09:42
 */

namespace App\Entities\Food;


use App\Entities\Asset\Image;
use App\Entities\Recipe\Step;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
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
    public function constraints()
    {
        return $this->belongsToMany(Constraint::class, 'ingredients_constraints', 'ingredient_id', 'constraint_id');
    }
    public function steps()
    {
        return $this->belongsToMany(Step::class, 'steps_ingredients', 'ingredient_id', 'step_id');
    }
}

