<?php

use App\Http\Controllers\Api\V1\Archive\ArchiveGalleryApi;
use App\Http\Controllers\Api\V1\Archive\ArchiveLawApi;
use App\Http\Controllers\Api\V1\Library\LibraryGalleryApi;
use App\Http\Controllers\Api\V1\Library\LibraryLawApi;
use App\Http\Controllers\Api\V1\Thumbnail\ThumbnailPosterApi;
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
        Route::get('', [ArchiveGalleryApi::class, 'index'])->name('archives.galleries.index');
        Route::post('', [ArchiveGalleryApi::class, 'create'])->name('archives.galleries.create');
        Route::put('/{id}', [ArchiveGalleryApi::class, 'update'])->name('archives.galleries.update');
        Route::get('/{id}', [ArchiveGalleryApi::class, 'findById'])->name('archives.galleries.findById');
        Route::delete('/{id}', [ArchiveGalleryApi::class, 'destroy'])->name('archives.galleries.delete');
    });
    Route::prefix('/laws')->group(function () {
        Route::get('', [ArchiveLawApi::class, 'index'])->name('archives.laws.index');
        Route::post('', [ArchiveLawApi::class, 'create'])->name('archives.laws.create');
        Route::put('/{id}', [ArchiveLawApi::class, 'update'])->name('archives.laws.update');
        Route::get('/{id}', [ArchiveLawApi::class, 'findById'])->name('archives.laws.findById');
        Route::delete('/{id}', [ArchiveLawApi::class, 'destroy'])->name('archives.laws.delete');
    });
});

Route::prefix('/libraries')->group(function () {
    Route::prefix('/galleries')->group(function () {
        Route::get('', [LibraryGalleryApi::class, 'index'])->name('libraries.galleries.index');
        Route::post('', [LibraryGalleryApi::class, 'create'])->name('libraries.galleries.create');
        Route::put('/{id}', [LibraryGalleryApi::class, 'update'])->name('libraries.galleries.update');
        Route::get('/{id}', [LibraryGalleryApi::class, 'findById'])->name('libraries.galleries.findById');
        Route::delete('/{id}', [LibraryGalleryApi::class, 'destroy'])->name('libraries.galleries.delete');
    });
    Route::prefix('/laws')->group(function () {
        Route::get('', [LibraryLawApi::class, 'index'])->name('libraries.laws.index');
        Route::post('', [LibraryLawApi::class, 'create'])->name('libraries.laws.create');
        Route::put('/{id}', [LibraryLawApi::class, 'update'])->name('libraries.laws.update');
        Route::get('/{id}', [LibraryLawApi::class, 'findById'])->name('libraries.laws.findById');
        Route::delete('/{id}', [LibraryLawApi::class, 'destroy'])->name('libraries.laws.delete');
    });
});

Route::prefix('/thumbnails')->group(function () {
    Route::prefix('/posters')->group(function () {
        Route::get('', [ThumbnailPosterApi::class, 'index'])->name('thumbnail.poster.index');
        Route::post('', [ThumbnailPosterApi::class, 'create'])->name('thumbnail.poster.create');
        Route::put('/{id}', [ThumbnailPosterApi::class, 'update'])->name('thumbnail.poster.update');
        Route::get('/{id}', [ThumbnailPosterApi::class, 'findById'])->name('thumbnail.poster.findById');
        Route::delete('/{id}', [ThumbnailPosterApi::class, 'destroy'])->name('thumbnail.poster.delete');
    });
});
