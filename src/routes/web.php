<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/home', [HomeController::class, 'home']);

Route::get('/register', [HomeController::class, 'register'])->name('register');

Route::post('/signUp', [HomeController::class, 'signUp'])->name('signUp');

Route::get('/showUser', [HomeController::class, 'showUser'])->name('showUser');

Route::get('/login', [HomeController::class, 'login'])->name('login');

Route::post('/handleLogin', [HomeController::class, 'handleLogin']);

Route::get('/changePassword/{id}', [HomeController::class, 'changePassword'])->name('changePassword');

Route::post('/handleChangePsw', [HomeController::class, 'handleChangePsw']);

Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('edit');

Route::post('/handleEdit', [HomeController::class, 'handleEdit'])->name('handleEdit');

Route::get('/delete{id}', [HomeController::class, 'delete'])->name('delete');





//Session

Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::get('/asd', function () {
    // Retrieve a piece of data from the session...
    $value = session('key');

    // Store a piece of data in the session...
    session(['key' => 'value']);
});

Route::group(['prefix' => 'session'], function () {
    Route::get('/get', [UserController::class, 'getSession']);
    Route::get('/set', [UserController::class, 'setSession']);
    Route::get('/unset', [UserController::class, 'unsetSession']);
    Route::get('/SangyeuHai', [UserController::class, 'yeuHai']);
});
