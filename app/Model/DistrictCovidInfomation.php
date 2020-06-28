<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DistrictCovidInfomation extends Model
{
    //
    public function district()
    {
        return $this->belongsTo(district::class);
    }
}
