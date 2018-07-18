<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 17/07/2018
 * Time: 15:29
 */

namespace Tests\Unit\Api\User;

use App\Entities\User\Role;
use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
class UserUnitTest extends TestCase
{
    use WithoutMiddleware;

    public function test_create_user_entity()
    {
        $data = [
            'user_first_name' => 'Test',
            'user_last_name' => 'Test',
            'user_address' => '14 rue du Vaugueux',
            'user_gender' => 'homme',
            'user_birth_date' => 'test@test.com',
            'user_phone' => '06060606',
            'user_email' => 'test@test.com',
            'user_login' => 'test.test',
            'password' => Hash::make('test'),
            'user_avatar' => '',
            'user_description' => 'test description',
            'user_slug' => 'test slug',
            'country_id' => '',
            'language_id' => '',
            'role_id' => Role::ADMIN,
        ];


        $user = new User($data);

        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals($data['user_first_name'], $user->user_first_name);
        $this->assertEquals($data['user_last_name'], $user->user_last_name);
        $this->assertEquals($data['user_address'], $user->user_address);
        $this->assertEquals($data['user_gender'], $user->user_gender);
        $this->assertEquals($data['user_birth_date'], $user->user_birth_date);
        $this->assertEquals($data['user_phone'], $user->user_phone);
        $this->assertEquals($data['user_email'], $user->user_email);
        $this->assertEquals($data['user_login'], $user->user_login);
        $this->assertEquals($data['password'], $user->password);
        $this->assertEquals($data['user_avatar'], $user->user_avatar);
        $this->assertEquals($data['user_description'], $user->user_description);
        $this->assertEquals($data['user_slug'], $user->user_slug);
        $this->assertEquals($data['country_id'], $user->country_id);
        $this->assertEquals($data['language_id'], $user->language_id);
        $this->assertEquals($data['role_id'], $user->role_id);
    }
}
