<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\EmployeeController;

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

Route::get('employee',[EmployeeController::class,'index']);
Route::get('/add-employee',[EmployeeController::class,'create']);
Route::post('/store-employee',[EmployeeController::class,'store']);
