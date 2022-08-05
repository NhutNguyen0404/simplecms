<?php

namespace App\Providers;

use App\Services\Admin\Auth\AdminAuthServiceInterface;
use App\Services\Admin\Auth\AdminAuthService;
use Illuminate\Support\ServiceProvider;

class LogicProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(AdminAuthServiceInterface::class, AdminAuthService::class);
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
