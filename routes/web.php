<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Membership;
use App\Http\Controllers\videoController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\subscribe;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('home');
});
Route::get('/new', function () {
    return view('layouts.news');
});
Route::get('/about', function () {
    return view('layouts.about');
});
Route::get('/business', function () {
    return view('layouts.business');
});
Route::get('/culture', function () {
    return view('layouts.culture');
});
Route::get('/login', function () {
    return view('auths.login');
});

Route::get('/travel', function () {
    return view('layouts.travel');
});
Route::get('/donate', function () {
    return view('layouts.donate');
});
Route::get('/membership', function () {
    return view('layouts.membership');
});
Route::any('/email_subscribe', function () {
    return view('layouts.email');
});
Route::get('/email_subscribe', [subscribe::class,'homeIndex']);
Route::post('/dataInsert', [subscribe::class,'dataInsert']);
Route::get('/membership', [Membership::class,'HomeIndex']);
Route::post('/DataInsert', [Membership::class,'DataInsert']);






/*Auth::routes();

Route::get('auth/homes', [App\Http\Controllers\Auth\HomeController::class, 'index']);


Route::get('/user/homes', [App\Http\Controllers\User\HomeController::class, 'index']);
*/

 

 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    Route::controller(videoController::class)->prefix('videos')->group(function () {
        Route::get('', 'index')->name('videos');
        Route::get('create', 'create')->name('videos.create');
        Route::post('store', 'store')->name('videos.store');
        Route::get('show/{id}', 'show')->name('videos.show');
        Route::get('edit/{id}', 'edit')->name('videos.edit');
        Route::put('edit/{id}', 'update')->name('videos.update');
        Route::delete('destroy/{id}', 'destroy')->name('videos.destroy');
    });
    Route::controller(newsController::class)->prefix('news')->group(function () {
        Route::get('/news', 'index')->name('news');
        Route::get('create', 'create')->name('news.create');
        Route::post('store', 'store')->name('news.store');
        Route::get('show/{id}', 'show')->name('news.show');
        Route::get('edit/{id}', 'edit')->name('news.edit');
        Route::put('edit/{id}', 'update')->name('news.update');
        Route::delete('destroy/{id}', 'destroy')->name('news.destroy');
    });
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});