<?php

use App\Http\Controllers\CustomerController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::get('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::group([
    'prefix' => 'dashboard',
    'as' => 'dashboard.'
], function(){
        Route::get('/', [\App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');

});

Route::group([
    'prefix' => 'customer',
    'as' => 'customer.'
], function(){
        Route::get('/index', [\App\Http\Controllers\CustomerController::class, 'index'])->name('index');
        Route::get('/create', [\App\Http\Controllers\CustomerController::class, 'create'])->name('create');
        Route::post('/create', [\App\Http\Controllers\CustomerController::class, 'create'])->name('create');
        Route::get('/edit/{customer_id}', [\App\Http\Controllers\CustomerController::class, 'edit'])->name('edit');
        Route::post('/update/{customer_id}', [\App\Http\Controllers\CustomerController::class, 'update'])->name('update');
        Route::get('/show', [\App\Http\Controllers\CustomerController::class, 'show'])->name('show');
        Route::delete('/{customer_id}', [\App\Http\Controllers\CustomerController::class, 'delete'])->name('delete');

});

Route::group([
    'prefix' => 'order',
    'as' => 'order.'
], function(){
        Route::get('/index', [\App\Http\Controllers\OrderController::class, 'index'])->name('index');
        Route::get('/create', [\App\Http\Controllers\OrderController::class, 'create'])->name('create');
        Route::post('/create', [\App\Http\Controllers\OrderController::class, 'create'])->name('create');
        Route::get('/edit', [\App\Http\Controllers\OrderController::class, 'edit'])->name('edit');
        Route::get('/show', [\App\Http\Controllers\CustomerController::class, 'show'])->name('show');

});

Route::group([
    'prefix' => 'employee',
    'as' => 'employee.'
], function(){
        Route::get('/index', [\App\Http\Controllers\EmployeeController::class, 'index'])->name('index');
        Route::get('/create', [\App\Http\Controllers\EmployeeController::class, 'create'])->name('create');
        Route::post('/create', [\App\Http\Controllers\EmployeeController::class, 'create'])->name('create');
        Route::get('/edit/{employee_id}', [\App\Http\Controllers\EmployeeController::class, 'edit'])->name('edit');
        Route::post('/update/{employee_id}', [\App\Http\Controllers\EmployeeController::class, 'update'])->name('update');
        Route::get('/show', [\App\Http\Controllers\EmployeeController::class, 'show'])->name('show');
        Route::delete('/{employee_id}', [\App\Http\Controllers\EmployeeController::class, 'delete'])->name('delete');


});

Route::group([
    'prefix' => 'product',
    'as' => 'product.'
], function(){
        Route::get('/index', [\App\Http\Controllers\ProductController::class, 'index'])->name('index');
        Route::get('/create', [\App\Http\Controllers\ProductController::class, 'create'])->name('create');
        Route::post('/create', [\App\Http\Controllers\ProductController::class, 'create'])->name('create');
        Route::get('/edit', [\App\Http\Controllers\ProductController::class, 'edit'])->name('edit');
        Route::get('/show', [\App\Http\Controllers\ProductController::class, 'show'])->name('show');

});

Route::group([
    'prefix' => 'shipper',
    'as' => 'shipper.'
], function(){
        Route::get('/index', [\App\Http\Controllers\ShipperController::class, 'index'])->name('index');
        Route::get('/create', [\App\Http\Controllers\ShipperController::class, 'create'])->name('create');
        Route::post('/create', [\App\Http\Controllers\ShipperController::class, 'create'])->name('create');
        Route::get('/edit/{shipper_id}', [\App\Http\Controllers\ShipperController::class, 'edit'])->name('edit');
        Route::post('/update/{shipper_id}', [\App\Http\Controllers\ShipperController::class, 'update'])->name('update');
        Route::get('/show', [\App\Http\Controllers\ShipperController::class, 'show'])->name('show');
        Route::delete('/{shipper_id}', [\App\Http\Controllers\ShipperController::class, 'delete'])->name('delete');

});

Route::group([
    'prefix' => 'supplier',
    'as' => 'supplier.'
], function(){
        Route::get('/index', [\App\Http\Controllers\SupplierController::class, 'index'])->name('index');
        Route::get('/create', [\App\Http\Controllers\SupplierController::class, 'create'])->name('create');
        Route::post('/create', [\App\Http\Controllers\SupplierController::class, 'create'])->name('create');
        Route::get('/edit', [\App\Http\Controllers\SupplierController::class, 'edit'])->name('edit');
        Route::get('/show', [\App\Http\Controllers\SupplierController::class, 'show'])->name('show');

});
