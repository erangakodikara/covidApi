<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DistrictCovidInfomationAPITest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGetAllDistrictCovidInfomation()
    {
        // $response = $this->get('/api/district');
        // var_dump($response);
        // die;
        $this->json('GET', static::API_PATH.'/district')
        ->assertJson($this->buildResponsePayload([
            'error' => true,
            'id'     => 7
        ],['created_at']))
        ->assertStatus(200);
        //$response->assertStatus(200);
    }
}
