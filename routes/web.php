<?php

use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControlController;
use App\Http\Controllers\LinkController;



Route::get('/', function () {
    return view('layout.apps');
})->middleware('auth');



Route::resource('controls', ControlController::class);
Route::resource('permissions', PermissionController::class);
Route::resource('roles', RoleController::class);
Route::resource('users',UserController::class);
Route::resource('links',LinkController::class);
  
Auth::routes();
