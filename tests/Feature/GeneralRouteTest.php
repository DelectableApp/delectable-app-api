<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GeneralRouteTest extends TestCase
{
    /**
     * General route test .
     *
     * @return void
     */

        public function test_route_general()
    {
        echo "\n".__FUNCTION__."\n\n";
        $response = $this->call('GET', 'http://localhost:8000/api');
        $response->assertStatus(200);


        echo json_encode($response, JSON_PRETTY_PRINT);
    }



}
