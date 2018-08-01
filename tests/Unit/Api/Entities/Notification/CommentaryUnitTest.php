<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 31/07/2018
 * Time: 08:09
 */

namespace Tests\Unit\Api\Notification;

use App\Entities\Notification\Commentary;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class CommentaryUnitTest extends TestCase
{

    use WithoutMiddleware;

    public function test_create_commentary_entity()
    {
        echo "\n".__FUNCTION__."\n\n";


        $data = [
            'commentary_text' => 'Test_commentary_text',
            'commentary_isValid' => 0,
            'user_id' => 42,
            'menu_id' => 42,
            'recipe_id' => 42,
        ];


        $commentary = new Commentary($data);

        $this->assertInstanceOf(Commentary::class, $commentary);
        $this->assertEquals($data['commentary_text'], $commentary->commentary_text);
        $this->assertEquals($data['commentary_isValid'], $commentary->commentary_isValid);
        $this->assertEquals($data['user_id'], $commentary->user_id);
        $this->assertEquals($data['menu_id'], $commentary->menu_id);
        $this->assertEquals($data['recipe_id'], $commentary->recipe_id);



        $results=$commentary;
        echo json_encode($results, JSON_PRETTY_PRINT);
    }
}
