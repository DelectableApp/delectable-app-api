<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 16:32
 */

namespace Tests\Unit\Api\Food;


use App\Entities\Food\IngredientType;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class IngredientTypeUnitTest extends TestCase
{

    use WithoutMiddleware;

    public function test_create_ingredient_entity()
    {
        echo "\n".__FUNCTION__."\n\n";
        $data = [
            'ingredient_type_name' => 'Test_ingredient_type_name',
            'image_id' => 42,
        ];


        $ingredient_type = new IngredientType($data);

        $this->assertInstanceOf(IngredientType::class, $ingredient_type);
        $this->assertEquals($data['ingredient_type_name'], $ingredient_type->ingredient_type_name);
        $this->assertEquals($data['image_id'], $ingredient_type->image_id);



        $results=$ingredient_type;
        echo json_encode($results, JSON_PRETTY_PRINT);
    }
}