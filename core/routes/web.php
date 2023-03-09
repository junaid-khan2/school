<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FeeController;

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
  return view('template.home');
});


Route::get('/register' ,function (){
  return view('template.regform');
});
Route::get('/fee/form/{id}',[FeeController::class , 'free_from']);
Route::get('fee/showlist',[FeeController::class , 'showlist']);
Route::post('/ajax',[FeeController::class , 'ajax']);
Route::get('student/show',[StudentController::class , 'index']);
Route::post('student/store',[StudentController::class , 'store']);

