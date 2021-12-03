<?php

use App\Http\Controllers\StudentController1;
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
Route::get('/', [StudentController1::class, 'index'])->name("student.index");
Route::any('/create',[StudentController1::class, 'create'])->name("student.create");
Route::any('/update/{id}',[StudentController1::class, 'update'])->name("student.update");
Route::get('/delete/{id}',[StudentController1::class, 'delete'])->name("student.delete");

