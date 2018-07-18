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

        public function test_get_experiences()
    {
        $response = $this->call('GET', 'http://localhost:8000/api');
        $response->assertStatus(200);
    }


}
