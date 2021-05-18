<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DistrictAPITest extends TestCase
{
    public function testGetAllDistrictById()
    {

        $district = factory(\App\District::class, 'districtA')->create(['districtname'=>'Colombo']);

        $this->json('GET', static::API_PATH.'/district/'.$district->id)
        //->assertJson($this->buildResponsePayload($district))
        ->assertStatus(200);

    }
}
