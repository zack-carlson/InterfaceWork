<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Crm;
use App\Services\Salesforce;
use App\Services\Dynamics;


class CrmServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(Crm::class, Dynamics::class);
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
