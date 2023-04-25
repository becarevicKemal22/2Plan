<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * Test that the home page returns a valid response.
     */
    public function testReturnsValidResponse()
    {
        $response = $this->get('/home');

        $response = $this->actingAs($this->user())->get('/home');
        $response->assertOk();

    }
}
