<?php

namespace App\Http\Controllers;

use App\DistrictCovidInfomation;
use App\District;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DistrictCovidInfomationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = DistrictCovidInfomation::all(); 
        if($data) {
            return $this->api->sendResponse( $data);
        }
        return $this->api->sendResponse(['error' => ['Record not found']], Response::HTTP_NOT_FOUND);
    }


    public function getDistrictData($districtId)
    {

        $district = District::where('id',$districtId)->first();

        if($district){

            $districtData = DistrictCovidInfomation::where('district_id', '=', $district->id)->get();
            
            return $this->api->sendResponse($districtData);
        } 

        
        return $this->api->sendResponse(['District name not found'],404);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DistrictCovidInfomation  $districtCovidInfomation
     * @return \Illuminate\Http\Response
     */
    public function show(DistrictCovidInfomation $districtCovidInfomation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DistrictCovidInfomation  $districtCovidInfomation
     * @return \Illuminate\Http\Response
     */
    public function edit(DistrictCovidInfomation $districtCovidInfomation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DistrictCovidInfomation  $districtCovidInfomation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DistrictCovidInfomation $districtCovidInfomation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DistrictCovidInfomation  $districtCovidInfomation
     * @return \Illuminate\Http\Response
     */
    public function destroy(DistrictCovidInfomation $districtCovidInfomation)
    {
        //
    }
}
