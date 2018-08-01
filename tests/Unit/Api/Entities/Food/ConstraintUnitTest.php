<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 16:11
 */

namespace Tests\Unit\Api\Food;

use App\Entities\Food\Constraint;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class ConstraintUnitTest extends TestCase
{

    use WithoutMiddleware;

    public function test_create_constraint_entity()
    {
        echo "\n".__FUNCTION__."\n\n";
        $data = [
            'constraint_name' => 'Test_constraint_name',
        ];


        $constraint = new Constraint($data);

        $this->assertInstanceOf(Constraint::class, $constraint);
        $this->assertEquals($data['constraint_name'], $constraint->constraint_name);



        $results=$constraint;
        echo json_encode($results, JSON_PRETTY_PRINT);
    }

}