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

Route::middleware('auth')->get('/', function () {
    return view('home');
})->name('home');

Route::get('/test', function () {
    return view('403');
});

Route::get('/send-reminder', [NotificationController::class, 'sendReminder']);

Route::middleware('auth')->prefix('/session')->as('session.')->group(function(){
    Route::get('/', [SessionController::class, 'index'])->name('index');
    Route::get('/create', [SessionController::class, 'create'])->name('create');
    Route::post('/store', [SessionController::class, 'store'])->name('store');
    Route::get('/view/{session}', [SessionController::class, 'view'])->name('view');
    Route::get('/edit/{session}', [SessionController::class, 'edit'])->name('edit');
    Route::post('/update/{session}', [SessionController::class, 'update'])->name('update');
    Route::get('/destroy/{session}', [SessionController::class, 'destroy'])->name('destroy');
});

Route::middleware('auth')->prefix('/assessment')->as('assessment.')->group(function(){
    Route::get('/', [AssessmentController::class, 'index'])->name('index');
    Route::get('/create/{session}', [AssessmentController::class, 'create'])->name('create');
    Route::post('/store', [AssessmentController::class, 'store'])->name('store');
    Route::get('/view/{assessment}', [AssessmentController::class, 'view'])->name('view');
    Route::get('/edit/{assessment}', [AssessmentController::class, 'edit'])->name('edit');
    Route::post('/update/{assessment}', [AssessmentController::class, 'update'])->name('update');
    Route::get('/destroy/{assessment}', [AssessmentController::class, 'destroy'])->name('destroy');
    Route::get('/generate/{session}', [AssessmentController::class, 'generate'])->name('generate');
});

Route::middleware('auth')->prefix('/profile')->as('profile.')->group(function(){
    Route::get('/', [ProfileController::class, 'index'])->name('index');
});

Route::middleware('auth')->prefix('/admin')->as('admin.')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/create', [AdminController::class, 'create'])->name('create');
    Route::post('/store', [AdminController::class, 'store'])->name('store');
    Route::get('/view/{admin}', [AdminController::class, 'view'])->name('view');
    Route::get('/edit/{admin}', [AdminController::class, 'edit'])->name('edit');
    Route::post('/update/{admin}', [AdminController::class, 'update'])->name('update');
    Route::get('/destroy/{admin}', [AdminController::class, 'destroy'])->name('destroy');
});

Route::middleware('auth')->prefix('/examiner')->as('examiner.')->group(function(){
    Route::get('/', [ExaminerController::class, 'index'])->name('index');
    Route::get('/create', [ExaminerController::class, 'create'])->name('create');
    Route::post('/store', [ExaminerController::class, 'store'])->name('store');
    Route::get('/view/{examiner}', [ExaminerController::class, 'view'])->name('view');
    Route::get('/edit/{examiner}', [ExaminerController::class, 'edit'])->name('edit');
    Route::post('/update/{examiner}', [ExaminerController::class, 'update'])->name('update');
    Route::get('/destroy/{examiner}', [ExaminerController::class, 'destroy'])->name('destroy');
});

Route::middleware('auth')->prefix('/supervisor')->as('supervisor.')->group(function(){
    Route::get('/', [SupervisorController::class, 'index'])->name('index');
    Route::get('/create', [SupervisorController::class, 'create'])->name('create');
    Route::post('/store', [SupervisorController::class, 'store'])->name('store');
    Route::get('/view/{supervisor}', [SupervisorController::class, 'view'])->name('view');
    Route::get('/edit/{supervisor}', [SupervisorController::class, 'edit'])->name('edit');
    Route::post('/update/{supervisor}', [SupervisorController::class, 'update'])->name('update');
    Route::get('/destroy/{supervisor}', [SupervisorController::class, 'destroy'])->name('destroy');
});

Route::middleware('auth')->prefix('/student')->as('student.')->group(function(){
    Route::get('/', [StudentController::class, 'index'])->name('index');
    Route::get('/create', [StudentController::class, 'create'])->name('create');
    Route::post('/store', [StudentController::class, 'store'])->name('store');
    Route::get('/view/{student}', [StudentController::class, 'view'])->name('view');
    Route::get('/edit/{student}', [StudentController::class, 'edit'])->name('edit');
    Route::post('/update/{student}', [StudentController::class, 'update'])->name('update');
    Route::get('/destroy/{student}', [StudentController::class, 'destroy'])->name('destroy');
});

Auth::routes();

Route::middleware('auth')->get('/home', [HomeController::class, 'index'])->name('home');
