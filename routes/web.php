<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\Test;

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

Route::post('/insert',[ Test::class,"store"])->name("stroe");
Route::get('/insert',[ Test::class,"get"])->name("index");
Route::get('/load',[ Test::class,"load"])->name("load");
Route::get('/edit/{id}',[ Test::class,"edit"])->name("edit");