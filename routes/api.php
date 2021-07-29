<?php

use App\Http\Controllers\Api\V1\Archive\ArchiveGalleryApi;
use App\Http\Controllers\Api\V1\Library\LibraryGalleryApi;
use App\Http\Controllers\Api\V1\User\UserApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('users')->group(function () {
    Route::get('', [UserApi::class, 'findAll'])->name('users.findAll');
    Route::post('', [UserApi::class, 'create'])->name('users.create');
    Route::get('/{id}', [UserApi::class, 'findById'])->name('users.findById');
    Route::put('/{id}', [UserApi::class, 'update'])->name('users.update');
    Route::delete('/{id}', [UserApi::class, 'destroy'])->name('users.delete');
});

Route::prefix('/archives')->group(function () {
    Route::prefix('/galleries')->group(function () {
        Route::get('', [ArchiveGalleryApi::class, 'index'])->name('archives.galery.index');
        Route::post('', [ArchiveGalleryApi::class, 'create'])->name('archives.galery.create');
        Route::put('/{id}', [ArchiveGalleryApi::class, 'update'])->name('archives.galery.update');
        Route::get('/{id}', [ArchiveGalleryApi::class, 'findById'])->name('archives.galery.findById');
        Route::delete('/{id}', [ArchiveGalleryApi::class, 'destroy'])->name('archives.galery.delete');
    });
});

Route::prefix('/libraries')->group(function () {
    Route::prefix('/galleries')->group(function () {
        Route::get('', [LibraryGalleryApi::class, 'index'])->name('libraries.galery.index');
        Route::post('', [LibraryGalleryApi::class, 'create'])->name('libraries.galery.create');
        Route::put('/{id}', [LibraryGalleryApi::class, 'update'])->name('libraries.galery.update');
        Route::get('/{id}', [LibraryGalleryApi::class, 'findById'])->name('libraries.galery.findById');
        Route::delete('/{id}', [LibraryGalleryApi::class, 'destroy'])->name('libraries.galery.delete');
    });
});
