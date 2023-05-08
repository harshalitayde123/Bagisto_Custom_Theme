<?php

use Illuminate\Support\Facades\Route;

Route::group([
        'prefix'     => 'dwebpixelecommerce',
        'middleware' => ['web', 'theme', 'locale', 'currency']
    ], function () {

        Route::get('/', 'ACME\dwebpixelEcommerce\Http\Controllers\Shop\dwebpixelEcommerceController@index')->defaults('_config', [
            'view' => 'dwebpixelecommerce::shop.index',
        ])->name('shop.dwebpixelecommerce.index');

});