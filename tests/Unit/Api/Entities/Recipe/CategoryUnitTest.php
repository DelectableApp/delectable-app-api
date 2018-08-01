<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 31/07/2018
 * Time: 10:10
 */

namespace Tests\Unit\Api\Recipe;


use App\Entities\Recipe\Category;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class CategoryUnitTest extends TestCase
{

    use WithoutMiddleware;

    public function test_create_category_entity()
    {
        echo "\n".__FUNCTION__."\n\n";


        $data = [
            'category_name' => 'Test_category_name',
            'category_frequency' => 42,
            'category_description' => 'Test_category_desc',
            'image_id' => 42,
        ];

        $category = new Category($data);

        $this->assertInstanceOf(Category::class, $category);
        $this->assertEquals($data['category_name'], $category->category_name);
        $this->assertEquals($data['category_frequency'], $category->category_frequency);
        $this->assertEquals($data['category_description'], $category->category_description);
        $this->assertEquals($data['image_id'], $category->image_id);



        $results=$category;
        echo json_encode($results, JSON_PRETTY_PRINT);
    }
}