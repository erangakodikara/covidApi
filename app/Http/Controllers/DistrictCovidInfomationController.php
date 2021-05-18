<?php

namespace App\Http\Controllers;

use App\Model\DistrictCovidInfomation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Repositories\Interfaces\DistrictCovidInfomationRepositoryInterface;

class DistrictCovidInfomationController extends Controller
{
    private $districtInfoRepository;
    public function __construct(DistrictCovidInfomationRepositoryInterface $districtInfoRepository) {
        parent::__construct();
        $this->districtInfoRepository = $districtInfoRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return $this->districtInfoRepository->all();  

        $data = $this->districtInfoRepository->all();
        if(!$data) {
            return $this->api->sendResponse(['error' => ['Record not found']], Response::HTTP_NOT_FOUND);
            
        }
        return $this->api->sendResponse( $data);

    }

    public function getDistrictInfomation($id)
    {

        $districtData =  $this->districtInfoRepository->getByDistrictId($id);
        if(!$districtData) {
            return $this->api->sendResponse(['District name not found'],404);
        }
        
        return $this->api->sendResponse($districtData);
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
     * @param  \App\Model\DistrictCovidInfomation  $districtCovidInfomation
     * @return \Illuminate\Http\Response
     */
    public function show(DistrictCovidInfomation $districtCovidInfomation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\DistrictCovidInfomation  $districtCovidInfomation
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
     * @param  \App\Model\DistrictCovidInfomation  $districtCovidInfomation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DistrictCovidInfomation $districtCovidInfomation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\DistrictCovidInfomation  $districtCovidInfomation
     * @return \Illuminate\Http\Response
     */
    public function destroy(DistrictCovidInfomation $districtCovidInfomation)
    {
        //
    }
}
