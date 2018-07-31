<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 16:16
 */

namespace Tests\Unit\Api\Food;

use App\Entities\Food\Diet;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class DietUnitTest extends TestCase
{

    use WithoutMiddleware;

    public function test_create_diet_entity()
    {
        echo "\n".__FUNCTION__."\n\n";
        $data = [
            'diet_name' => 'Test_diet_name',
        ];


        $diet = new Diet($data);

        $this->assertInstanceOf(Diet::class, $diet);
        $this->assertEquals($data['diet_name'], $diet->diet_name);



        $results=$diet;
        echo json_encode($results, JSON_PRETTY_PRINT);
    }

}