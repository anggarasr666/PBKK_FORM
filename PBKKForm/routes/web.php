<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

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

Route::get('/form', function(){
    return view('formInput');
});

Route::get('/result', function(){
    return view('formFinish');
}); 

Route::post('/db-form', [FormController::class, 'store']);

Route::get('/allForm', [FormController::class, 'index']);