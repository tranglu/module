<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2/8/2021
 * Time: 1:35 PM
 */
use Illuminate\Support\Facades\Route;
use WebHoanHao\Module1\FirstModule\Http\Controllers\FirstModuleController;
//Route::prefix('plugins/first-module')->group(function () {
////    Route::get('/', function () {
////        return 'Module first-module" đã được load.';
////    })->name('plugins.first-module');
//    Route::get('/',[FirstModuleController::class,'index'])->name('plugins.first-module');
//});
Route::get('/1234',[FirstModuleController::class,'index'])->name('plugins.first-module');
    Route::get('/', function () {
        return 'Module first-module" đã được load.';
    })->name('plugins.first-module1');