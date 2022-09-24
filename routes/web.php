<?php

use App\Http\Controllers\DinasController;
// use App\Models\Dinas_model;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DinasController::class,'index']);
Route::get('/create', [DinasController::class,'create']);
Route::post('/store', [DinasController::class,'store']);
Route::get('/edit/{id}', [DinasController::class,'edit']);
Route::put('/edit/{id}', [DinasController::class,'update']);
Route::delete('/edit/{id}', [DinasController::class,'destroy']);