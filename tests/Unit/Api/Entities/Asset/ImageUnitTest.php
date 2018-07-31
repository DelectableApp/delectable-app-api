<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 16:00
 */

namespace Tests\Unit\Api\Asset;

use App\Entities\Asset\Image;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class ImageUnitTest extends TestCase
{

    use WithoutMiddleware;

    public function test_create_image_entity()
    {
        echo "\n".__FUNCTION__."\n\n";
        $data = [
            'image_name' => 'Test_image_name',
            'image_desc' => 'Test_image_desc',
            'image_isValid' => 0,
            'user_id' => 42,
            'ingredient_type_id' => 42,
            'ingredient_id' => 42,
            'utensil_id' => 42,
            'category_id' => 42,
            'menu_id' => 42,
            'recipe_id' => 42,

        ];

        $image = new Image($data);

        $this->assertInstanceOf(Image::class, $image);
        $this->assertEquals($data['image_name'], $image->image_name);
        $this->assertEquals($data['image_desc'], $image->image_desc);
        $this->assertEquals($data['image_isValid'], $image->image_isValid);
        $this->assertEquals($data['user_id'], $image->user_id);
        $this->assertEquals($data['ingredient_type_id'], $image->ingredient_type_id);
        $this->assertEquals($data['ingredient_id'], $image->ingredient_id);
        $this->assertEquals($data['utensil_id'], $image->utensil_id);
        $this->assertEquals($data['category_id'], $image->category_id);
        $this->assertEquals($data['menu_id'], $image->menu_id);
        $this->assertEquals($data['recipe_id'], $image->recipe_id);

        $results=$image;
        echo json_encode($results, JSON_PRETTY_PRINT);
    }

}