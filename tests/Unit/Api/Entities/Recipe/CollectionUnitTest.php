<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 31/07/2018
 * Time: 10:25
 */

namespace Tests\Unit\Api\Recipe;


use App\Entities\Recipe\Collection;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class CollectionUnitTest extends TestCase
{

    use WithoutMiddleware;

    public function test_create_collection_entity()
    {
        echo "\n".__FUNCTION__."\n\n";


        $data = [
            'collection_name' => 'Test_collection_name',
            'collection_slug' => 'Test_collection_slug',
            'user_id' => 42,
        ];
        $collection = new Collection($data);

        $this->assertInstanceOf(Collection::class, $collection);
        $this->assertEquals($data['collection_name'], $collection->collection_name);
        $this->assertEquals($data['collection_slug'], $collection->collection_slug);
        $this->assertEquals($data['user_id'], $collection->user_id);



        $results=$collection;
        echo json_encode($results, JSON_PRETTY_PRINT);
    }

}