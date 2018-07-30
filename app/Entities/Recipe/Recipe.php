<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 11:06
 */

namespace App\Entities\Recipe;


class Recipe
{
    public $timestamps = false;

    protected $table = 'recipes';

    protected $primaryKey = 'recipe_id';

    protected $fillable = [
        'recipe_name',
        'recipe_description',
        'recipe_isPublic',
        'recipe_slug',
        //FK
        'user_id',
        'image_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }
    public function step()
    {
        return $this->belongsTo(Step::class, 'step_id');
    }

    public function setuser($user)
    {
        return $this->user()->sync($user);
    }
    public function setimage($image)
    {
        return $this->image()->sync($image);
    }

}

