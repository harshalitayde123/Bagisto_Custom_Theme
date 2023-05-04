<?php

Route::group([
        'prefix'        => 'admin/demo',
        'middleware'    => ['web', 'admin']
    ], function () {

        Route::get('', 'ACME\Demo\Http\Controllers\Admin\DemoController@index')->defaults('_config', [
            'view' => 'demo::admin.index',
        ])->name('admin.demo.index');

});