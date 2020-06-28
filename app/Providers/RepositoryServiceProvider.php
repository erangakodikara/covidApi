<?php

namespace App\Providers;

use App\Repositories\DistrictRepository;
use App\Repositories\DistrictCovidInfomationRepository;

use App\Repositories\Interfaces\DistrictRepositoryInterface;
use App\Repositories\Interfaces\DistrictCovidInfomationRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(DistrictRepositoryInterface::class,DistrictRepository::class);
        $this->app->bind(DistrictCovidInfomationRepositoryInterface::class,DistrictCovidInfomationRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
