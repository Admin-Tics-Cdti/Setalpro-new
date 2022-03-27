<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/** Principal */
Route::get('/', [App\Http\Controllers\AdminController::class, 'index']);

/**Auth routes */
Auth::routes();

/**Controllers */
Route::controllers([
    'usuarios/usuario' => 'App\Http\Controllers\Modules\Users\UsersController'
]);