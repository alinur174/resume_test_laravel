<?php

namespace App\Providers;

use App\Services\AdminService;
use App\Services\AdminService\IAdminService;
use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

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

    /**
     * Все синглтоны (одиночки) контейнера, которые должны быть зарегистрированы.
     *
     * @var array
     */
    public $singletons = [
        IAdminService::class => AdminService::class,
    ];
}
