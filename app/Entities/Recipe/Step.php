<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 11:10
 */

namespace App\Entities\Recipe;


class Step
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


}