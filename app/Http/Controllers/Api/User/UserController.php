<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 01/08/2018
 * Time: 08:11
 */

namespace App\Http\Controllers\Api\User;


use App\Entities\User\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateUser;
use App\Http\Resources\User\User\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class UserController extends Controller
{
    public function index()
    {
        $queryStrings = Input::only(['limit', 'order-by', 'sort']);
        $limit = (integer)Input::get('limit', 25);
        $orderBy = Input::get('order-by', 'user_id');
        $sort = Input::get('sort', 'asc');

        $user = User::orderby($orderBy, $sort)->paginate($limit)->appends($queryStrings);

        return UserResource::collection($user);
    }

    public function show(Request $request)
    {
        UserResource::withoutWrapping();

        return new UserResource(User::findOrFail($request->route('id')));
    }

    public function update(UpdateUser $request)
    {
        $user = User::findOrFail($request->route('id'));
        $user->update($request->all());
        $this->checkRelationship($request, $user);
        return $user;
    }

    public function destroy(Request $request)
    {
        $user = User::findOrFail($request->route('id'));
        $user->delete();

        return response()->json(null, 204);
    }

    private function checkRelationship($request, $context)
    {

        if ($request->country_id) {
            $context->setCountry($request->country_id);
        }
        if ($request->language_id) {
            $context->setLanguage($request->language_id);
        }
        if ($request->user_avatar) {
            $context->setAvatar($request->user_avatar);
        }
        if ($request->role_id) {
            $context->setRole($request->role_id);
        }

    }
}