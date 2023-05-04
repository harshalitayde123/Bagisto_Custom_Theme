<?php

use ACME\Demo\Http\Controllers\Shop\DemoController;
use Illuminate\Support\Facades\Route;

Route::group([
        'prefix'     => 'demo',
        'middleware' => ['web', 'theme', 'locale', 'currency']
    ], function () {

        Route::get('/', 'ACME\Demo\Http\Controllers\Shop\DemoController@index')->defaults('_config', [
            'view' => 'demo::shop.index',
        ])->name('shop.demo.index');
        Route::post('demo/store', [DemoController::class, 'store'])->name('demo.store'); 

});