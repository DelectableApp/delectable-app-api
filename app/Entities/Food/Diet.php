<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 08:40
 */

namespace App\Entities\Food;


use App\User;
use Illuminate\Database\Eloquent\Model;

class Diet extends Model
{
    public $timestamps = false;

    protected $table = 'diets';

    protected $primaryKey = 'diet_id';

    protected $fillable = [
        'diet_name',
    ];
    public function ingredients_types()
    {
        return $this->belongsToMany(IngredientType::class, 'ingredients_types_diets', 'diet_id', 'ingredient_type_id');
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'users_diets', 'diet_id', 'user_id');
    }
}