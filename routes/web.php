<?php

<<<<<<< HEAD
use App\Http\Controllers\Admin\RoleController;
=======
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
>>>>>>> crud_user
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard.index');
<<<<<<< HEAD
<<<<<<< HEAD
});
=======
})->name('dashboard');
>>>>>>> create_role
=======
})->name('dashboard');
>>>>>>> crud_user
Route::get('/home', function () {
    return view('client.layouts.app');
});
Auth::routes();
<<<<<<< HEAD
<<<<<<< HEAD
=======

Route::resource('roles', RoleController::class);
>>>>>>> create_role
=======

Route::resource('roles', RoleController::class);
Route::resource('users', UserController::class);
Route::resource('categories', CategoryController::class);
>>>>>>> crud_user
