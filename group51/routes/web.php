<?php

use App\Http\Controllers\ControllerInDeep\BrancheController;
use App\Http\Controllers\ControllerInDeep\BranchesController;
use App\Http\Controllers\ControllerInDeep\InvoController;
use App\Http\Controllers\eventTestController;
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

// Route::get('/home/{age}', function ($age) {
//     return view('hamada', compact('age'));
//     // echo "ahmed";
//     //return "ahmed";// return response()->json()
// })->middleware(['young:'.config('app.locale')]);

// Route::get('/', function () {
//     return view('test.index');
// });
// Route::get('/pro', function () {
//     return view('test.allprod');
// });

// Route::get('home/all/data', function () {
//     echo "this is homw";
// });

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

// Route::prefix('product')->name('pro.')->controller(ProductController::class)->group(function () {
//     Route::get('all', 'index')->name('all');
//     Route::get('add', 'ourMain')->name('add');
//     Route::put('add', 'store')->name('store');//http://127.0.0.1:8000/product/data/edit/ui
//     Route::get('delete/2', 'delete')->name('del');
// });

// Route::get('test/event', [eventTestController::class , 'index']);

// Route::get('test/user/{id}', [TestUserController::class , 'index'])->name('user.all');

// Route::fallback(function () {
//     return view('welcome') ;
// });
// Route::view('test/paramter/{id}' , 'welcome' , [])
Route::get('test/invokable', InvoController::class);

Route::prefix('branches')->name('branch.')->controller(BrancheController::class)->group(function () {
    Route::get('all', 'index')->name('all');
    Route::get('add', 'create')->name('add');
    Route::post('add', 'store')->name('store');
    Route::get('edit/{id}', 'edit')->name('edit');
    Route::put('edit/{id}', 'update')->name('update');
    Route::get('show/branch/{id}', 'show')->name('show');
    Route::delete('branch/{id}', 'destroy')->name('del');
});

// Route::resource('branchahmed', BranchesController::class)->names([
//     'index' => 'branchahmed.all'
// ]);
