<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\AboutController;
use App\Http\Controllers\WargaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/warga', [WargaController::class,'index']);
Route::get('/warga/create', [WargaController::class,'create']);
Route::post('/warga/store', [WargaController::class,'store']);

Route::view('/test0', 'test0');
Route::view('/test1', 'test1');
Route::view('/test2', 'test2');
Route::view('/test3', 'test3');
Route::view('/testweb', 'testweb');
Route::view('/latihanphp', 'latihanphp');
Route::view('/dropdown', 'dropdown');
Route::view('/testcopy', 'testcopy');
Route::view('/test', 'test');
Route::view('/testmain', 'testmain');
Route::view('/testmain2', 'testmain2');





