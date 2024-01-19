<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/tests' , [TestController::class,'index']);
Route::post('/tests/create' , [TestController::class,'create']);
Route::post('/tests/store' , [TestController::class,'store'])->name('test.store');
// Route::post('/tests/store', 'TestController@store')->name('test.store');
