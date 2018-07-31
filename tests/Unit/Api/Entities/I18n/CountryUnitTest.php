<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 16:47
 */

namespace Tests\Unit\Api\I18n;


use App\Entities\I18n\Country;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class CountryUnitTest extends TestCase
{

    use WithoutMiddleware;

    public function test_create_country_entity()
    {
        echo "\n".__FUNCTION__."\n\n";
        $data = [
            'country_name' => 'Test_country_name',
            'country_legal_age' => 18,
            'continent_id' => 42,
        ];


        $country = new Country($data);

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals($data['country_name'], $country->country_name);
        $this->assertEquals($data['country_legal_age'], $country->country_legal_age);
        $this->assertEquals($data['continent_id'], $country->continent_id);



        $results=$country;
        echo json_encode($results, JSON_PRETTY_PRINT);
    }
}