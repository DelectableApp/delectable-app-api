<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 16:35
 */

namespace Tests\Unit\Api\Food;


use App\Entities\Food\Utensil;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class UtensilUnitTest extends TestCase
{

    use WithoutMiddleware;

    public function test_create_utensil_entity()
    {
        echo "\n".__FUNCTION__."\n\n";
        $data = [
            'utensil_name' => 'Test_utensil_name',
            'image_id' => 42,
        ];


        $utensil = new Utensil($data);

        $this->assertInstanceOf(Utensil::class, $utensil);
        $this->assertEquals($data['utensil_name'], $utensil->utensil_name);
        $this->assertEquals($data['image_id'], $utensil->image_id);



        $results=$utensil;
        echo json_encode($results, JSON_PRETTY_PRINT);
    }
}