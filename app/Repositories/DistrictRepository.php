<?php
namespace App\Repositories;

use App\Model\District;
use App\Repositories\Interfaces\DistrictRepositoryInterface;

class DistrictRepository implements DistrictRepositoryInterface
{
    public function all()
    {
        $district = District::orderBy('districtname')->get();
        return $district; 
    }
    public function getById($id)
    {
    
        $district = District::where('id',$id)->get();

        return $district; 
    }


}