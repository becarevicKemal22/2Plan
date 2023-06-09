<?php

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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('subject-classes', \App\Http\Controllers\SubjectClassController::class);
    Route::resource('school-classes', \App\Http\Controllers\SchoolClassController::class);
});

Route::get('/', function () {
        return redirect('/home');
    }
);

Auth::routes();
