<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 7/15/2018
 * Time: 4:45 PM
 */

namespace App\Entities\I18n;


use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    public $timestamps = true;
    protected $primaryKey = 'country_id';
    protected $fillable = [
        'country_name',
        'country_legal_age',
        //FK
        'continent_id',

    ];
    public function continent()
    {
        return $this->belongsTo(Continent::class, 'continent_id');
    }
    public function setContinent($continentId)
    {
        return $this->continent()->associate($continentId);
    }
}