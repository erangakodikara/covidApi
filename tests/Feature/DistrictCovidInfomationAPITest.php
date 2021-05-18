<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DistrictCovidInfomationAPITest extends TestCase
{

    public function testGetCovidInfomationByDistrictId()
    {
        $district = factory(\App\District::class, 'districtA')->create(['districtname'=>'Colombo']);
        $districtInfomation = factory(\App\DistrictCovidInfomation::class, 'districtInfomationA')->create(['district_id'=>$district]);
        $this->json('GET', static::API_PATH.'/local-all-infomation/'.$district->id)
        //->assertJson($this->buildResponsePayload($districtInfomation))
        ->assertStatus(200);
    }

}
