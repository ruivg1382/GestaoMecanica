<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\oficinaController;

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
    return view('index');
});

Route::get('/novo',[oficinaController::class,'adicionar']);


Route::get('/show',[oficinaController::class,'show']);


Route::get('/update', [oficinaController::class,'update']);

Route::get('/delete', [oficinaController::class,'delete']);


Route::get('/todomec',[oficinaController::class,'mostrar_mecanico']);






