<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 31/07/2018
 * Time: 09:43
 */

namespace Tests\Unit\Api\Notification;


use App\Entities\Notification\Adoration;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class AdorationUnitTest extends TestCase
{

    use WithoutMiddleware;

    public function test_create_adoration_entity()
    {
        echo "\n".__FUNCTION__."\n\n";


        $data = [
            'user_id' => 42,
            'menu_id' => 42,
            'recipe_id' => 42,
        ];

        $adoration = new Adoration($data);

        $this->assertInstanceOf(Adoration::class, $adoration);
        $this->assertEquals($data['user_id'], $adoration->user_id);
        $this->assertEquals($data['menu_id'], $adoration->menu_id);
        $this->assertEquals($data['recipe_id'], $adoration->recipe_id);



        $results=$adoration;
        echo json_encode($results, JSON_PRETTY_PRINT);
    }
}