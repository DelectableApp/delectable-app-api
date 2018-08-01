<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 01/08/2018
 * Time: 08:19
 */

namespace App\Http\Resources\User\User;


use App\Http\Resources\I18n\Country\CountryContinentResource;
use Illuminate\Http\Resources\Json\JsonResource;

class UserCountryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {

        return [
            'id' => $this->country_id,
            'name' => $this->country_name,
            'legal_age' => $this->country_legal_age,
            'continent' => new CountryContinentResource($this->continent),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            /*'links' => [
                'self' => route('single_city', ['id' => $this->city_id]),
                'collection' => route('cities', []),
            ],*/
        ];
    }
}
