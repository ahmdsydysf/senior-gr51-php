<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\ProductController as ControllersProductController;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestUserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    // echo "ahmed";
    //return "ahmed";// return response()->json()
});

Route::get('home/all/data', function () {
    echo "this is homw";
});

// Route::get('products/all', [ProductController::class , 'ourMain']);
// // Route::get('products/all', [ProductController::class , 'ourMain']);

// Route::get('products', [ControllersProductController::class , 'main']);
// Route::post()
// Route::put()
// Route::patch()
// Route::delete()

// D R Y

// Route::get('product/all', [ProductController::class , 'index']);
// Route::get('product/add', [ProductController::class , 'create']);
// Route::get('product/edit/1', [ProductController::class , 'edit']);
// Route::get('product/delete/2', [ProductController::class , 'delete']);

Route::prefix('product')->name('pro.')->controller(ProductController::class)->group(function () {
    Route::get('all', 'index')->name('all');
    Route::get('add', 'create')->name('add');
    Route::post('add', 'store')->name('store');//http://127.0.0.1:8000/product/data/edit/ui
    Route::get('delete/2', 'delete')->name('del');
});


Route::get('test/user/{id}', [TestUserController::class , 'index'])->name('user.all');

// Route::view('test/paramter/{id}' , 'welcome' , [])
