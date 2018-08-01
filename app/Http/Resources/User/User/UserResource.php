<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 01/08/2018
 * Time: 08:14
 */
namespace App\Http\Resources\User\User;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'id' => $this->user_id,
            'firstname' => $this->user_first_name,
            'lastname' => $this->user_last_name,
            'address' => $this->user_address,
            'gender' => $this->user_gender,
            'birth_date' => $this->user_birth_date,
            'phone' => $this->user_phone,
            'email' => $this->user_email,
            'login' => $this->user_login,
         //   'image' => new UserImageResource($this->image),
            'role' => $this->role->role_name,
            'country' => new UserCountryResource($this->country),
            'language' => new UserLanguageResource($this->language),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'links' => [
                'self' => route('single_user', ['id' => $this->user_id]),
                'collection' => route('users', []),
            ],
        ];
    }
}