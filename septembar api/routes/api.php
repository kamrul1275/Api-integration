<?php

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/show/user/{id?}',[HomeController::class,'showUser'])->name('All.User');

Route::post('/add/user',[HomeController::class,'AddUser'])->name('add.User');

Route::get('/edit/{id}',[HomeController::class,'EditUser'])->name('edit.User');


Route::get('/delete/{id}',[HomeController::class,'DeleteUser'])->name('delete.User');
