<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;

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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('auth.login');
});




//admin
// Route::resource('/admin/user',[UserController::class, 'adminUser']);

Route::group(['namespace' => 'admin'], function() {
    Route::get('/admin',[AdminController::class, 'index']);
    Route::get('/admin/user',[AdminController::class, 'adminUser']);
    Route::get('/admin/user/upload',[AdminController::class, 'upload']);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
