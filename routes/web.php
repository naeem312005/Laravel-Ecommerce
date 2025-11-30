<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('backend.layout.dashbord');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/',[DashbordController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//Caregory Route
Route::get('/category',[CategoryController::class,'index'])->name('category');
Route::get('/category/create',[CategoryController::class,'create'])->name('category.add');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::put('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::delete('/category/delete/{id}',[CategoryController::class,'destroy'])->name('category.delete');

//Product Route 
Route::get('/product',[ProductController::class,'index'])->name('product');
Route::get('/product/add',[ProductController::class,'create'])->name('product.add');
Route::post('/product/store',[ProductController::class,'store'])->name('product.store');
Route::get('/product/edit',[ProductController::class,'edit'])->name('product.edit');
Route::put('/product/update/{id}',[ProductController::class,'update'])->name('product.update');
Route::delete('/product/delete/{id}',[ProductController::class,'destroy'])->name('product.delete');

//slider Route 
Route::get('/slider',[SliderController::class,'index'])->name('slider');
Route::get('/slider/add',[SliderController::class,'create'])->name('slider.add');
Route::post('/slider/store',[SliderController::class,'store'])->name('slider.store');
Route::get('/slider/edit/{id}',[SliderController::class,'edit'])->name('slider.edit');
Route::put('/slider/update/{id}',[SliderController::class,'update'])->name('slider.update');
Route::delete('/slider/delete/{id}',[SliderController::class,'destroy'])->name('slider.delete');

//User Route 
Route::get('/user',[UserController::class,'index'])->name('user');
Route::get('/user/edit',[UserController::class,'edit'])->name('user.edit');
Route::put('/user/update/{id}',[UserController::class,'update'])->name('user.update');
Route::delete('/user/delete/{id}',[UserController::class,'destroy'])->name('user.delete');
//Order Route 
Route::get('/order',[OrderController::class,'index'])->name('order');
Route::get('/order/order-details',[OrderController::class,'details'])->name('order.details');
Route::delete('/order/delete/{id}',[OrderController::class,'destroy'])->name('order.delete');



require __DIR__.'/auth.php';
