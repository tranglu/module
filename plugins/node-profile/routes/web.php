<?php
use Illuminate\Support\Facades\Route;
use WebHoanHao\Pmtttm\NodeProfile\Http\Controllers\NodeProfileController;

Route::prefix('plugins/node-profile')->group(function () {
    Route::get('/123', function () {
        return 'Module "Node Profile" đã được load.';
    })->name('plugins.node-profile');

});
//Route::prefix('plugins/node-profile')->group(function () {
//    Route::get('/',[NodeProfileController::class,'index'])->name('plugins.node-profile');
//});


    Route::get('/12345',[NodeProfileController::class,'index'])->name('plugins.node-profile-1');
