<?php

use Illuminate\Database\Seeder;

class DistrictCovidInfomationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Model\DistrictCovidInfomation::class,100)->create();
    }
}
