<?php
namespace App\Http\Controllers\Oauth2;

use App\Entities\User\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index(Request $request)
    {
        // On valide le contenu du corps de la requête
        $validator = Validator::make($request->all(), [
            'user_first_name' => 'required',
            'user_last_name' => 'required',
            'user_login' => 'required|unique:users',
            'user_email' => 'required|unique:users|email',
            'user_password' => 'required',
            'user_password_confirmation' => 'required|same:user_password',

        ]);

        // Si la validation échoue on retourne le(s) message(s) d'erreur
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        // Si la validation passe on créer un nouvel utilisateur
        $user = User::create([
            'user_first_name' => $request->user_first_name,
            'user_last_name' => $request->user_last_name,
            'user_login' => $request->user_login,
            'user_email' => $request->user_email,
            'password' => Hash::make($request->user_password),
            'user_address' => $request->user_adress,
            'user_gender' => $request->user_adress,
            'user_birth_date' => $request->user_birth_date,
            'user_phone' => $request->user_phone,
            'user_description' => $request->user_description,
            'user_slug' => '',


        ]);

        $res = [
            'user_first_name' => $user->user_first_name,
            'user_last_name' => $user->user_last_name,
            'user_login' => $user->user_login,
            'user_email' => $user->user_email,
            'user_token' => $user->createToken('delectableToken')->accessToken,
            'user_address' => $request->user_adress,
            'user_gender' => $user->user_adress,
            'user_birth_date' => $user->user_birth_date,
            'user_phone' => $user->user_phone,
            'user_description' => $user->user_description,
            'user_slug' => $user->user_slug,
        ];

        return response()->json(['success' => $res], 200);
    }
}