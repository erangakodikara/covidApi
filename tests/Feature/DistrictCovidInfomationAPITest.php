<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DistrictCovidInfomationAPITest extends TestCase
{

    // public function testGetAllDistrictCovidInfomation()
    // {
    //     // $response = $this->get('/api/district');
    //     // var_dump($response);
    //     // die;
    //     // $district = factory(\App\District::class, 'districtA')->create(['districtname'=>'Colombo']);
    //     // $districtCovidInfomation= factory(\App\DistrictCovidInfomation::class, 'DistrictCovidInfomationA')->create(['district_id'=>$district->id]);
    //     // // var_dump( $districtCovidInfomation);
    //     // // die;
    //     // $this->json('GET', static::API_PATH.'/district')
    //     // ->assertJson($this->buildResponsePayload([
    //     //     'error' => true,
    //     //     'id'     => 7
    //     // ],['created_at']))
    //     // ->assertStatus(200);
    //     //$response->assertStatus(200);
    // }
    public function testGetAllDistrict()
    {

        $district = factory(\App\District::class, 'districtA')->create(['districtname'=>'Colombo']);

        $this->json('GET', static::API_PATH.'/district')
        ->assertStatus(200)
        ->assertArraySubset(['count'=>6]);

    }
}
