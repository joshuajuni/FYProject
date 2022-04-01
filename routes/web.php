<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Auth;

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
    return view('home');
})->name('home');

Route::get('/test', function () {
    return view('404');
});

Route::prefix('/session')->as('session.')->group(function(){
    Route::get('/', [SessionController::class, 'index'])->name('index');
    Route::get('/create', [SessionController::class, 'create'])->name('create');
    Route::post('/store', [SessionController::class, 'store'])->name('store');
    Route::get('/view', [SessionController::class, 'view'])->name('view');
    Route::get('/edit', [SessionController::class, 'edit'])->name('edit');
    Route::post('/update', [SessionController::class, 'update'])->name('update');
    Route::get('/destroy', [SessionController::class, 'destroy'])->name('destroy');
});

Route::prefix('/assessment')->as('assessment.')->group(function(){
    Route::get('/', [AssessmentController::class, 'index'])->name('index');
});

Route::prefix('/profile')->as('profile.')->group(function(){
    Route::get('/', [ProfileController::class, 'index'])->name('index');
});

Route::prefix('/admin')->as('admin.')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/create', [AdminController::class, 'create'])->name('create');
    Route::post('/store', [AdminController::class, 'store'])->name('store');
    Route::get('/view', [AdminController::class, 'view'])->name('view');
    Route::get('/edit', [AdminController::class, 'edit'])->name('edit');
    Route::post('/update', [AdminController::class, 'update'])->name('update');
    Route::get('/destroy', [AdminController::class, 'destroy'])->name('destroy');
});

Route::prefix('/examiner')->as('examiner.')->group(function(){
    Route::get('/', [ExaminerController::class, 'index'])->name('index');
    Route::get('/create', [ExaminerController::class, 'create'])->name('create');
    Route::post('/store', [ExaminerController::class, 'store'])->name('store');
    Route::get('/view', [ExaminerController::class, 'view'])->name('view');
    Route::get('/edit', [ExaminerController::class, 'edit'])->name('edit');
    Route::post('/update', [ExaminerController::class, 'update'])->name('update');
    Route::get('/destroy', [ExaminerController::class, 'destroy'])->name('destroy');
});

Route::prefix('/supervisor')->as('supervisor.')->group(function(){
    Route::get('/', [SupervisorController::class, 'index'])->name('index');
    Route::get('/create', [SupervisorController::class, 'create'])->name('create');
    Route::post('/store', [SupervisorController::class, 'store'])->name('store');
    Route::get('/view', [SupervisorController::class, 'view'])->name('view');
    Route::get('/edit', [SupervisorController::class, 'edit'])->name('edit');
    Route::post('/update', [SupervisorController::class, 'update'])->name('update');
    Route::get('/destroy', [SupervisorController::class, 'destroy'])->name('destroy');
});

Route::prefix('/student')->as('student.')->group(function(){
    Route::get('/', [StudentController::class, 'index'])->name('index');
    Route::get('/create', [StudentController::class, 'create'])->name('create');
    Route::post('/store', [StudentController::class, 'store'])->name('store');
    Route::get('/view', [StudentController::class, 'view'])->name('view');
    Route::get('/edit', [StudentController::class, 'edit'])->name('edit');
    Route::post('/update', [StudentController::class, 'update'])->name('update');
    Route::get('/destroy', [StudentController::class, 'destroy'])->name('destroy');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
