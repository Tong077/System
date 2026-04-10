<?php

use App\Http\Controllers\PermissionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('layout.apps');
});



Route::resource('permissions', PermissionController::class);
Auth::routes();
