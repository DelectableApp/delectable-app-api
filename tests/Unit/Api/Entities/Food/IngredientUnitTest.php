<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 16:28
 */

namespace Tests\Unit\Api\Food;

use App\Entities\Food\Ingredient;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class IngredientUnitTest extends TestCase
{

    use WithoutMiddleware;

    public function test_create_ingredient_entity()
    {
        echo "\n".__FUNCTION__."\n\n";
        $data = [
            'ingredient_name' => 'Test_ingredient_name',
            'ingredient_isValid' => 0,
            'ingredient_type_id' => 42,
            'image_id' => 42,
        ];


        $ingredient = new Ingredient($data);

        $this->assertInstanceOf(Ingredient::class, $ingredient);
        $this->assertEquals($data['ingredient_name'], $ingredient->ingredient_name);
        $this->assertEquals($data['ingredient_isValid'], $ingredient->ingredient_isValid);
        $this->assertEquals($data['ingredient_type_id'], $ingredient->ingredient_type_id);
        $this->assertEquals($data['image_id'], $ingredient->image_id);



        $results=$ingredient;
        echo json_encode($results, JSON_PRETTY_PRINT);
    }

}