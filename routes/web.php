<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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
    return view('page.home');
});

/**
 * Auth
 */
Route::group(['prefix' => 'auth'], function () {
    Route::controller(LoginController::class)->group(function ($route) {
        $route->get('/login', 'showLoginForm');
        $route->post('/login', 'login')->name('login');
        $route->get('/logout', 'logout')->name('logout');
    });

    Route::controller(RegisterController::class)->group(function ($route) {
        $route->get('/signup', 'showRegistrationForm');
        $route->post('/signup', 'register')->name('register');
    });
});
