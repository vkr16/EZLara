<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentsController;
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

Route::get('/',[PagesController::class, 'home'] );
Route::get('/laravel',[PagesController::class, 'laravel'] );



Route::delete('/student/{student}', [StudentsController::class, 'destroy']);
Route::get('/student', [StudentsController::class, 'index']);
Route::get('/student/create', [StudentsController::class, 'create']);
Route::get('/student/{student}/edit', [StudentsController::class, 'edit']);
Route::get('/student/{student}', [StudentsController::class, 'show']);
Route::post('/student', [StudentsController::class, 'store']);
Route::patch('/student/{student}', [StudentsController::class, 'update']);