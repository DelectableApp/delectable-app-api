<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 09:31
 */

namespace App\Entities\Food;


use Illuminate\Database\Eloquent\Model;

class Constraint extends Model
{
    public $timestamps = false;

    protected $table = 'constraints';

    protected $primaryKey = 'constraint_id';

    protected $fillable = [
        'constraint_name',
    ];

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'ingredients_constraints', 'constraint_id', 'ingredient_id');
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'users_constraints', 'constraint_id', 'user_id');
    }
}