<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 31/07/2018
 * Time: 11:03
 */

namespace Tests\Unit\Api\Recipe;

use App\Entities\Recipe\Step;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class StepUnitTest extends TestCase
{

    use WithoutMiddleware;

    public function test_create_menu_entity()
    {
        echo "\n".__FUNCTION__."\n\n";


        $data = [
            'step_name' => 'Test_step_name',
            'step_time' => 42,
            'step_description' => 'Test_step_name',
            'step_number' => 42,
            'recipe_id' => 42,
            'user_id' => 42,
        ];
        $step = new Step($data);

        $this->assertInstanceOf(Step::class, $step);
        $this->assertEquals($data['step_name'], $step->step_name);
        $this->assertEquals($data['step_time'], $step->step_time);
        $this->assertEquals($data['step_description'], $step->step_description);
        $this->assertEquals($data['step_number'], $step->step_number);
        $this->assertEquals($data['recipe_id'], $step->recipe_id);
        $this->assertEquals($data['user_id'], $step->user_id);



        $results=$step;
        echo json_encode($results, JSON_PRETTY_PRINT);
    }
}