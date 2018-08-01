<?php


namespace App\Http\Controllers\Oauth2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index(Request $request)
    {

        // On valide le contenu du corps de la requête
        $validator = Validator::make($request->all(), [
            'user_email' => 'required',
            'user_password' => 'required',
        ]);

        // Si la validation échoue on retourne le(s) message(s) d'erreur
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        // Sinon on s'authentifie
        if (Auth::attempt([
                'user_email' => request('user_email'),
                'password' => request('user_password'),
            ]) || Auth::attempt([
                'user_login' => request('user_login'),
                'password' => request('user_password'),
            ])) {

            $user = [
                'user_id' => Auth::user()->user_id,
                'user_first_name' => Auth::user()->user_first_name,
                'user_last_name' => Auth::user()->user_last_name,
                'user_login' => Auth::user()->user_login,
                'user_email' => Auth::user()->user_email,
                'user_token' => Auth::user()->createToken('delectableToken')->accessToken,
            ];

            return response()->json($user, 200);
        } else {
            // Si l'authentification échoue on renvoit un code 401
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }
}

