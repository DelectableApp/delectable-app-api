<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 31/07/2018
 * Time: 09:51
 */

namespace Tests\Unit\Api\Notification;


use App\Entities\Notification\Tag;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class TagUnitTest extends TestCase
{

    use WithoutMiddleware;

    public function test_create_tag_entity()
    {
        echo "\n".__FUNCTION__."\n\n";


        $data = [
            'tag_name' => 'Test_tag_name',
            'collection_id' => 42,
            'menu_id' => 42,
            'recipe_id' => 42,
            'category_id' => 42,
        ];


        $tag = new Tag($data);

        $this->assertInstanceOf(Tag::class, $tag);
        $this->assertEquals($data['tag_name'], $tag->tag_name);
        $this->assertEquals($data['collection_id'], $tag->collection_id);
        $this->assertEquals($data['menu_id'], $tag->menu_id);
        $this->assertEquals($data['recipe_id'], $tag->recipe_id);
        $this->assertEquals($data['category_id'], $tag->category_id);



        $results=$tag;
        echo json_encode($results, JSON_PRETTY_PRINT);
    }
}