<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/register', [HomeController::class, 'register']);

Route::post('/signUp', [HomeController::class, 'signUp']);

Route::get('/showUser', [HomeController::class, 'showUser']);

Route::get('/login', [HomeController::class, 'login']);

Route::post('/handleLogin', [HomeController::class, 'handleLogin']);
