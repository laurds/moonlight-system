<?php

use App\Http\Controllers\CustomersController;
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
$home = app()->getLocale() . "/login";
Route::redirect('/', $home);

Route::group(['prefix' => '{language}'], function () {
    Route::get('/', function () {
        return view('auth/login');
    });

    //Rotas autenticação
    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('customers', CustomersController::class);
});

