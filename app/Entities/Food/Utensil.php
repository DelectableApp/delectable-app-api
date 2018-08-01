<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 10:11
 */

namespace App\Entities\Food;


use App\Entities\Asset\Image;
use App\Entities\Recipe\Step;
use Illuminate\Database\Eloquent\Model;

class Utensil extends Model
{
    public $timestamps = false;

    protected $table = 'utensils';

    protected $primaryKey = 'utensil_id';

    protected $fillable = [
        'utensil_name',
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
    public function steps()
    {
        return $this->belongsToMany(Step::class, 'steps_utensils', 'utensil_id', 'step_id');
    }
}