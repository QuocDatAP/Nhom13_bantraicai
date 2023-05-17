<?php

<<<<<<< HEAD
<<<<<<< HEAD
use App\Http\Controllers\Admin\RoleController;
=======
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
>>>>>>> crud_user
=======
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Http\Request;
>>>>>>> crud_category
use Illuminate\Support\Facades\Route;
use Intervention\Image\Size;

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
<<<<<<< HEAD
});
=======
})->name('dashboard');
>>>>>>> create_role
=======
})->name('dashboard');
>>>>>>> crud_user
=======
})->name('dashboard');
>>>>>>> crud_category
Route::get('/home', function () {
    return view('client.layouts.app');
});
Auth::routes();
<<<<<<< HEAD
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
=======

Route::resource('roles', RoleController::class);
Route::resource('users', UserController::class);
Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);





























Route::post('/create ', function(Request $request){

    $dataCreate = $request->except('sizes');
    $sizes = $request->sizes ? json_decode($request->sizes) : [];

    $product = Product::create($dataCreate);
    $sizeArray = [];
    foreach($sizes as $size)
    {
        $sizeArray[] = ['size' => $size->size, 'quantity' => $size->quantity, 'product_id' => $product->id];
    }
    ProductDetail::insert($sizeArray);
})->name('test');
>>>>>>> crud_category
