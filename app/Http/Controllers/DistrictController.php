<?php

namespace App\Http\Controllers;

use App\Model\District;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Repositories\Interfaces\DistrictRepositoryInterface;

class DistrictController extends Controller
{

    private $districtRepository;
    public function __construct(DistrictRepositoryInterface $districtRepository) {
        parent::__construct();
        $this->districtRepository = $districtRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =  $this->districtRepository->all();
        if($data) {
            return $this->api->sendResponse( $data);
        }
        return $this->api->sendResponse(['error' => ['Record not found']], Response::HTTP_NOT_FOUND);
    }

    public function getDistrict($id)
    {
        $district =  $this->districtRepository->getById($id);
        if($district) {
            return $this->api->sendResponse($district);
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
     * @param  \App\Model\District  $district
     * @return \Illuminate\Http\Response
     */
    public function show(District $district)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\District  $district
     * @return \Illuminate\Http\Response
     */
    public function edit(District $district)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\District  $district
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, District $district)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\District  $district
     * @return \Illuminate\Http\Response
     */
    public function destroy(District $district)
    {
        //
    }
}
