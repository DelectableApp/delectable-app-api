<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 01/08/2018
 * Time: 08:36
 */

namespace App\Http\Requests\User;
use Illuminate\Foundation\Http\FormRequest;
class UpdateUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_first_name' => 'sometimes',
            'user_last_name' => 'sometimes',
            'user_address' => 'sometimes',
            'user_gender' => 'sometimes',
            'user_birth_date' => 'sometimes',
            'user_phone' => 'sometimes',
            'user_email' => 'sometimes',
            'user_login' => 'sometimes',
            'password' => 'sometimes',
            'password_confirmation' => 'sometimes',
            'user_avatar' => 'sometimes',
            'country_id' => 'sometimes',
            'language_id' => 'sometimes',

        ];
    }
}