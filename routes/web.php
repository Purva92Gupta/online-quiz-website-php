<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ResultController;
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

Route::get('/', [AuthController::class,'index'])->name('login.view');
Route::get('/register', [AuthController::class,'register'])->name('register.view');

Route::post('/register/save',[AuthController::class,'registerSave'])->name('register.save');
Route::post('/login/action',[AuthController::class,'loginAction'])->name('login.action');

Route::group(['middleware'=>['verifyUserLogin']],function () {

    Route::get('/dashboard',[AuthController::class,'dashboardView'])->name('dashboard.view');
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');

    Route::get('/give-quiz/{id}',[QuizController::class,'joinQuiz'])->name('join.quiz');

    Route::post('/show-answer',[AnswerController::class,'show'])->name('show.answer');
    Route::post('/store-answer',[AnswerController::class,'store'])->name('store.answer');

    Route::get('/results',[ResultController::class,'index'])->name('results');
});
