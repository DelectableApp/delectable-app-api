<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 7/15/2018
 * Time: 4:45 PM
 */

namespace App\Entities\I18n;


class Country
{

    public $timestamps = true;
    protected $fillable = [
        'country_name',
        'country_legal_age',
        'continent_id'

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