<?php

namespace App\Http\Controllers;
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
    return view('index');
})->name('home');

Route::get('/test', function () {
    return view('404');
});

Route::prefix('/session')->as('session.')->group(function(){
    Route::get('/', [SessionController::class, 'index'])->name('index');
    Route::get('/create', [SessionController::class, 'create'])->name('create');
    Route::get('/view', [SessionController::class, 'view'])->name('view');
    Route::get('/edit', [SessionController::class, 'edit'])->name('edit');
});

Route::prefix('/assessment')->as('assessment.')->group(function(){
    Route::get('/', [AssessmentController::class, 'index'])->name('index');
});

Route::prefix('/profile')->as('profile.')->group(function(){
    Route::get('/', [ProfileController::class, 'index'])->name('index');
});
