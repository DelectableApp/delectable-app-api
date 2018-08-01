<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 11:10
 */

namespace App\Entities\Recipe;


use App\Entities\Food\Ingredient;
use App\Entities\Food\Utensil;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    public $timestamps = false;

    protected $table = 'steps';

    protected $primaryKey = 'step_id';

    protected $fillable = [
        'step_name',
        'step_time',
        'step_description',
        'step_number',
        //FK
        'recipe_id',
        'user_id',
    ];
    public function recipe()
    {
        return $this->belongsTo(Recipe::class, 'recipe_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function setrecipe($recipe)
    {
        return $this->recipe()->sync($recipe);
    }
    public function setuser($user)
    {
        return $this->user()->sync($user);
    }
    public function utensils()
    {
        return $this->belongsToMany(Utensil::class, 'steps_utensils', 'step_id', 'utensil_id');
    }
    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'steps_ingredients', 'step_id', 'ingredient_id');
    }
    public function recipes()
    {
        return $this->belongsToMany(Recipe::class, 'recipes_steps', 'step_id', 'recipe_id');
    }

}