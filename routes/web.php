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
    return view('frontend/index');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/information', [App\Http\Controllers\InformationController::class, 'index'])->name('information');
Route::get('/article', [App\Http\Controllers\ArticleController::class, 'index'])->name('article');
Route::get('/profile/vision-mission', [App\Http\Controllers\VisionMissionController::class, 'index'])->name('vision and mission');
Route::get('/profile/task-function', [App\Http\Controllers\MainTaskFunctionController::class, 'index'])->name('main task and function');
Route::get('/profile/goal-target', [App\Http\Controllers\GoalTargetController::class, 'index'])->name('goal and target');
Route::get('/profile/organizational-structure', [App\Http\Controllers\OrganizationalStructureController::class, 'index'])->name('organizational structure');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
