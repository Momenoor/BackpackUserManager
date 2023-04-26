<?php

Route::group([
    'namespace'  => 'Momenoor\UserManager\app\Http\Controllers',
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', backpack_middleware()],
], function () {
    Route::crud('user', 'UserCrudController');
});
