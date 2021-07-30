<?php

use App\Http\Controllers\ActivityDinasController;
use App\Http\Controllers\ArchiveLawController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GoalTargetController;
use App\Http\Controllers\LibraryLawController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DetailGaleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\MainTaskFunctionController;
use App\Http\Controllers\OrganizationalStructureController;
use App\Http\Controllers\View\Backend\Archive\ArchiveGalleryView;
use App\Http\Controllers\View\Backend\Archive\ArchiveLawView;
use App\Http\Controllers\View\Backend\DashboardController;
use App\Http\Controllers\View\Backend\Library\LibraryGalleryView;
use App\Http\Controllers\View\Backend\Library\LibraryLawView;
use App\Http\Controllers\View\Backend\LoginView;
use App\Http\Controllers\View\Backend\UserController;
use App\Http\Controllers\VisionMissionController;
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

// // Auth::routes();

// Route::get('/', function () {
//     return view('frontend/index');
// });


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/information', [InformationController::class, 'index'])->name('information');
Route::get('/article', [ArticleController::class, 'index'])->name('article');
Route::get('/profile/vision-mission', [VisionMissionController::class, 'index'])->name('vision and mission');
Route::get('/profile/task-function', [MainTaskFunctionController::class, 'index'])->name('main task and function');
Route::get('/profile/goal', [GoalTargetController::class, 'index'])->name('goal');
Route::get('/profile/organizational-structure', [OrganizationalStructureController::class, 'index'])->name('organizational structure');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/galery', [GaleryController::class, 'index'])->name('galery');
Route::get('/detail-galery/{id}', [DetailGaleryController::class, 'index'])->name('detail galery');
Route::get('/profile/activity-dinas', [ActivityDinasController::class, 'index'])->name('activity dinas');
Route::get('/dasar-hukum/perpustakaan', [LibraryLawController::class, 'index'])->name('library law');
Route::get('/dasar-hukum/kearsipan', [ArchiveLawController::class, 'index'])->name('archive law');

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
            Route::get('/laws', [LibraryLawView::class, 'index'])->name('archives.laws.list');
        });

        //libraries
        Route::prefix('/archives')->group(function () {
            Route::get('/galleries', [ArchiveGalleryView::class, 'index'])->name('libraries.galleries.list');
            Route::get('/laws', [ArchiveLawView::class, 'index'])->name('libraries.archives.list');
        });
    });
});
