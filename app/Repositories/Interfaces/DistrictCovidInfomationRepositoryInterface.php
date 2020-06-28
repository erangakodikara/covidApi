<?php

namespace App\Repositories\Interfaces;

interface DistrictCovidInfomationRepositoryInterface
{
    public function all();
    public function getByDistrictId($id);
    
}