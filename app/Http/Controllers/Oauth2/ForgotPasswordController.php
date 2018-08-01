<?php

namespace App\Http\Controllers\Oauth2;

use App\Entities\User\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(Request $request)
    {
        $this->validate($request, ['user_email' => 'required|email']);
        if ($request->wantsJson()) {
            $user = User::where('user_email', $request->input('user_email'))->first();
            if (!$user) {
                return response()->json(null, trans('passwords.user'));
            }
            $token = $this->broker()->createToken($user);

            return response()->json(['user_reset_password_token' => $token]);
        }
    }
}

