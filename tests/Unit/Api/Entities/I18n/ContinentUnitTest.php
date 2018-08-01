<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 16:38
 */

namespace Tests\Unit\Api\I18n;


use App\Entities\I18n\Continent;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class ContinentUnitTest extends TestCase
{

    use WithoutMiddleware;

    public function test_create_continent_entity()
    {
        echo "\n".__FUNCTION__."\n\n";
        $data = [
            'continent_name' => 'Test_continent_name',
        ];


        $continent = new Continent($data);

        $this->assertInstanceOf(Continent::class, $continent);
        $this->assertEquals($data['continent_name'], $continent->continent_name);



        $results=$continent;
        echo json_encode($results, JSON_PRETTY_PRINT);
    }
}