<?php

use App\Http\Controllers\Login;
use App\Http\Controllers\Main;
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

// LOGIN
Route::get('/', [Login::class, 'index']);
// PROSES LOGIN
Route::post('/proses_login', [Login::class, 'proses_login']);
// LOGOUT
Route::get('/logout', [Login::class, 'logout']);

// MAIN INDEX
Route::get('/main', [Main::class, 'index']);

