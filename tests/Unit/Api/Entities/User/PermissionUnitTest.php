<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 12:51
 */

namespace Tests\Unit\Api\User;


use App\Entities\User\Permission;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class PermissionUnitTest extends TestCase
{

    use WithoutMiddleware;

    public function test_create_permission_entity()
    {
        echo "\n".__FUNCTION__."\n\n";
        $data = [
            'permission_name' => 'Test_permission_name',
        ];


        $permission = new Permission($data);

        $this->assertInstanceOf(Permission::class, $permission);
        $this->assertEquals($data['permission_name'], $permission->permission_name);


        $results=$permission;
        echo json_encode($results, JSON_PRETTY_PRINT);
    }

}