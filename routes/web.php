<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [IndexController::class, 'index']);

Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/{slug}', [ArticleController::class, 'show']);

Route::get('/jurusan/{name}', [JurusanController::class, 'index']);
Route::get('/jurusan-detail/{id}', [JurusanController::class, 'show']);

Route::get('/profile-sekolah', [ProfileController::class, 'index']);
Route::get('/profile-sekolah/{id}', [ProfileController::class, 'view']);


Route::get('/info-pendaftaran', [InfoController::class, 'index']);
Route::get('/info-pendaftaran/create', [InfoController::class, 'create']);
Route::post('/info-pendaftaran/store', [InfoController::class, 'store']);
// Route::get('/info-pendaftaran/edit/{id}', [InfoController::class, 'edit']);
// Route::put('/info-pendaftaran/update/{id}', [InfoController::class, 'update']);



Route::get('/contact', [ContactController::class, 'index']);

// Route::resource('/info-pendaftaran', InfoController::class);




Auth::routes();


Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function() {
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/', AdminController::class);
    Route::resource('/post', PostController::class);
    Route::resource('/user', UserController::class);
    Route::resource('/gallery', GalleryController::class);
    Route::resource('/major', MajorController::class);

});

Route::group(['middleware' => ['auth', 'teacher'], 'prefix' => 'teacher', 'as' => 'teacher.'], function() {
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/', TeacherController::class);
});