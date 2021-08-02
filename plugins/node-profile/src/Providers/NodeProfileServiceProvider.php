<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 1/8/2021
 * Time: 1:32 PM
 */

namespace WebHoanHao\Pmtttm\NodeProfile\Providers;

use Illuminate\Support\ServiceProvider; // sử dụng ServiceProvider của Laravel để mở rộng
class NodeProfileServiceProvider extends ServiceProvider
{

    public function boot()
    {
//        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');//load file route lên
        $this->loadViewsFrom(__DIR__.'/../../resources/views','node-profile');//load thư mục view
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'node-profile');
    }
}