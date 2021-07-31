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
Route::get('/archive/galery', [App\Http\Controllers\ArchiveGaleryController::class, 'index'])->name('archive galery');
Route::get('/archive/galery/{id}', [App\Http\Controllers\DetailArchiveGaleryController::class, 'index'])->name('detail archive galery');
Route::get('/library/galery', [App\Http\Controllers\LibraryGaleryController::class, 'index'])->name('library galery');
Route::get('/library/galery/{id}', [App\Http\Controllers\DetailLibraryGaleryController::class, 'index'])->name('detail library galery');


/* News */
Route::get('/news/journal', fn() => view('frontend/news/journal') );
Route::get('/news/articel', fn() => view('frontend/news/article') );
Route::get('/news/release', fn() => view('frontend/news/release') );
Route::get('/news/activity', fn() => view('frontend/news/activity') );
Route::get('/news/announcement', fn() => view('frontend/news/announcement') );
/* News */


/* PPID */
Route::get('/ppid/helper', fn() => view('frontend/ppid/helper') );
Route::get('/ppid/completeness', fn() => view('frontend/ppid/completeness') );
Route::get('/ppid/periodic', fn() => view('frontend/ppid/periodic') );
Route::get('/ppid/finance', fn() => view('frontend/ppid/finance') );
Route::get('/ppid/sertamerta', fn() => view('frontend/ppid/sertamerta') );
Route::get('/ppid/alltimes', fn() => view('frontend/ppid/alltimes') );
/* PPID */


/* SOP */
Route::get('/sop/development', fn() => view('frontend/sop/development') );
Route::get('/sop/technology', fn() => view('frontend/sop/technology') );
Route::get('/sop/library', fn() => view('frontend/sop/library') );
Route::get('/sop/archive', fn() => view('frontend/sop/archive') );
/* SOP */