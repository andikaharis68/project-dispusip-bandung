<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\View\Backend\Archive\ArchiveGalleryView;
use App\Http\Controllers\View\Backend\DashboardController;
use App\Http\Controllers\View\Backend\Library\LibraryGalleryView;
use App\Http\Controllers\View\Backend\LoginView;
use App\Http\Controllers\View\Backend\UserController;
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

Route::get('/', function () {
    return view('frontend/index');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/information', [App\Http\Controllers\InformationController::class, 'index'])->name('information');
Route::get('/article', [App\Http\Controllers\ArticleController::class, 'index'])->name('article');
Route::get('/profile/vision-mission', [App\Http\Controllers\VisionMissionController::class, 'index'])->name('vision and mission');
Route::get('/profile/task-function', [App\Http\Controllers\MainTaskFunctionController::class, 'index'])->name('main task and function');
Route::get('/profile/goal-target', [App\Http\Controllers\GoalTargetController::class, 'index'])->name('goal and target');
Route::get('/profile/organizational-structure', [App\Http\Controllers\OrganizationalStructureController::class, 'index'])->name('organizational structure');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::get('/galery', [App\Http\Controllers\GaleryController::class, 'index'])->name('galery');
Route::get('/detail-galery/{id}', [App\Http\Controllers\DetailGaleryController::class, 'index'])->name('detail galery');

// Backend
Route::get('/login', [LoginView::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::prefix('/backend')->group(function () {
        //users
        Route::prefix('/users')->group(function () {
            Route::get('', [UserController::class, 'index'])->name('users.list');
            Route::get('/{id}', [UserController::class, 'detail'])->name('users.detail');
        });

        //libraries
        Route::prefix('/libraries')->group(function () {
            Route::get('/galleries', [LibraryGalleryView::class, 'index'])->name('archives.galleries.list');
        });

        //libraries
        Route::prefix('/archives')->group(function () {
            Route::get('/galleries', [ArchiveGalleryView::class, 'index'])->name('libraries.galleries.list');
        });
    });
});
