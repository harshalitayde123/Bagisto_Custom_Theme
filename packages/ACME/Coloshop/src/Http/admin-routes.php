<?php

Route::group([
        'prefix'        => 'admin/coloshop',
        'middleware'    => ['web', 'admin']
    ], function () {

        Route::get('', 'ACME\Coloshop\Http\Controllers\Admin\ColoshopController@index')->defaults('_config', [
            'view' => 'coloshop::admin.index',
        ])->name('admin.coloshop.index');

});