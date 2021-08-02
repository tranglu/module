<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class PluginsRouteServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->routes(function () {
            Route::prefix('plugins/first-module')
//                ->middleware(['web','auth'])
                ->group(base_path('plugins/first-module/routes/web.php'));
        });
    }
}
