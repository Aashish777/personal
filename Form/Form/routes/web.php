<?php

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
Route::get('/students',[\App\Http\Controllers\StudentController::class, 'index']);
Route::post('/students/create',[\App\Http\Controllers\StudentController::class, 'create'])->name('student-create');

//Route::get('/students',function () {
//    echo "Student";
//    return view('students/index');
//});
