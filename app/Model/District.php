<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    //
    public function districtCovidInfomation()
    {
        return $this->hasMany(DistrictCovidInfomation::class);
    }
}
