<?php

Route::group([
        'prefix'     => 'coloshop',
        'middleware' => ['web', 'theme', 'locale', 'currency']
    ], function () {

        Route::get('/', 'ACME\Coloshop\Http\Controllers\Shop\ColoshopController@index')->defaults('_config', [
            'view' => 'coloshop::shop.index',
        ])->name('shop.coloshop.index');

});