<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/

Route::middleware(['auth', 'is_user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::group(['as' => 'admin.','prefix' => 'admin', 'middleware' => ['auth', 'is_admin']], function () {

    Route::get('/home', [HomeController::class, 'adminHome'])->name('home');

    Route::group(['as' => 'user.', 'prefix' => 'user', 'controller' => App\Http\Controllers\Admin\UserController::class], function () {
        Route::get('/', 'index')->name('index');
    });
});
