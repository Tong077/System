<?php

use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('layout.apps');
});



Route::resource('permissions', PermissionController::class);
Route::resource('roles', RoleController::class);
Route::resource('users',UserController::class);
Auth::routes();
