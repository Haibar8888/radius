<?php

use Illuminate\Support\Facades\Route;

// controller
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Backsite\GroupController;
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

Route::get('/', function () {
    return view('login.index');
});

Route::prefix('backsite')->group(function () {
     // dashboard 
    Route::view('/dashboard','admin.dashboard');
    // Group
    Route::resource('/group',GroupController::class);
});


