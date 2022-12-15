<?php
use App\Http\Controllers\SuppliersController;
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

Route::redirect('/','/login');

Route::get('/', ['middleware' =>'guest', function(){
    return view('auth.login');
}]);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/customers/search', [App\Http\Controllers\CustomersController::class, 'search'])->name('customers.search');
Route::post('/suppliers/search', [App\Http\Controllers\SuppliersController::class, 'search'])->name('suppliers.search');
Route::post('send', [App\Http\Controllers\SupportController::class, 'send'])->name('support.send');

//Route::get('/settings', [App\Http\Controllers\SettingsController::class, 'index'])->name('settings');
Route::resource('customers', CustomersController::class);
Route::resource('suppliers', SuppliersController::class);
Route::resource('support', \App\Http\Controllers\SupportController::class);
