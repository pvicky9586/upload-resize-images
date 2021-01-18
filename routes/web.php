<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\StudentController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/files', App\Http\Controllers\Admin\FileController::class);


Route::get('/resize-image',[ImageController::class,'resizeImage'])->name('resize-img');
Route::post('/resize-image',[ImageController::class,'resizeImageSubmit'])->name('image-resize');



Route::get('/add-student',[StudentController::class, 'addStudent'])->name('New');
Route::post('/add-student',[StudentController::class, 'addStudentStore'])->name('NewStore');

