<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\adminiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Auth\logoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\specialController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\homeController;
use GuzzleHttp\Middleware;

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

// Home Routes
Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/home', [homeController::class, 'index']); 


// Admin routes
Route::get('/admin/login', [AdminController::class, 'index'])->name('admin_login');
Route::post('/admin/login', [AdminController::class, 'store']);
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin_dashboard')->middleware('admin');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin_logout');
Route::get('/admin/register', [AdminController::class, 'register'])->name('admin_register');
Route::post('/admin/register', [adminController::class, 'admin_register'] );

// users routes 
Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/auth/register', [RegisterController::class, 'index'])->name('register');
Route::post('/auth/register', [RegisterController::class, 'store'])->name('post_register');

Route::get('/auth/login', [loginController::class, 'index'])->name('login');
Route::post('/auth/login', [loginController::class, 'store'])->name('login_post');

Route::post('/auth/logout', [logoutController::class, 'store'])->name('logout_post');

// error routes
Route::group(['prefix' => 'error'], function(){
    Route::get('404', function () { return view('pages.error.404'); })->name('error404');
    Route::get('500', function () { return view('pages.error.500'); })->name('error500');
});

// test routes

Route::get('/dtable', function(){
    return view('pages.tables.data-table');
}); 

Route::get('/alerts', function(){
    return view('pages.ui-components.alerts');
});

Route::get('/buttons', function(){
    return view('pages.ui-components.buttons');
}); 

Route::get('/cards',
    function(){
        return view('pages.ui-components.cards');
    }
);

