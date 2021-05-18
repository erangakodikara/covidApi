<?php

use Illuminate\Database\Seeder;

class DeviceActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\DeviceActivity::class,100)->create();
    }
}
