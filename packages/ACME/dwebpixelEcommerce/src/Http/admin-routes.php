<?php

Route::group([
        'prefix'        => 'admin/dwebpixelecommerce',
        'middleware'    => ['web', 'admin']
    ], function () {

        Route::get('', 'ACME\dwebpixelEcommerce\Http\Controllers\Admin\dwebpixelEcommerceController@index')->defaults('_config', [
            'view' => 'dwebpixelecommerce::admin.index',
        ])->name('admin.dwebpixelecommerce.index');

});