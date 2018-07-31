<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 31/07/2018
 * Time: 10:32
 */

namespace Tests\Unit\Api\Recipe;


use App\Entities\Recipe\Recipe;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class RecipeUnitTest extends TestCase
{

    use WithoutMiddleware;

    public function test_create_menu_entity()
    {
        echo "\n".__FUNCTION__."\n\n";


        $data = [
            'recipe_name' => 'Test_recipe_name',
            'recipe_description' => 'Test_recipe_desc',
            'recipe_isPublic' => 0,
            'recipe_slug' => 'Test_recipe_slug',
            'user_id' => 42,
            'image_id' => 42,
        ];
        $recipe = new Recipe($data);

        $this->assertInstanceOf(Recipe::class, $recipe);
        $this->assertEquals($data['recipe_name'], $recipe->recipe_name);
        $this->assertEquals($data['recipe_description'], $recipe->recipe_description);
        $this->assertEquals($data['recipe_isPublic'], $recipe->recipe_isPublic);
        $this->assertEquals($data['recipe_slug'], $recipe->recipe_slug);
        $this->assertEquals($data['user_id'], $recipe->user_id);
        $this->assertEquals($data['image_id'], $recipe->image_id);



        $results=$recipe;
        echo json_encode($results, JSON_PRETTY_PRINT);
    }
}