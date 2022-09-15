<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
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

Route::get('/generate-pdf', [PDFController::class, 'generatePDF']);
Route::get('/sample-pdf', [PDFController::class, 'samplePDF']);

//test
Route::get('/index', [TestController::class, 'index']);
Route::get('/form', [TestController::class, 'create']);
Route::post('/form/store', [TestController::class, 'store']);

Route::post('/get', [TestController::class, 'test']);
