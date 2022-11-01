<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\custom\ViewController;
use App\Http\Controllers\custom\backendController;
use App\Http\Controllers\custom\categoriesController;
use App\Http\Controllers\custom\OrderController;
use App\Http\Controllers\custom\ProductController;
use App\Http\Controllers\custom\ContactController;
use App\Http\Controllers\custom\loginController;
use App\Http\Controllers\custom\RegistrationController;


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


Route::get('/',[ViewController::class,'index']);
Route::get('/backend',[backendController::class,'backend']);
Route::get('/orders',[OrderController::class,'index'])->name('orders');
Route::get('/orderAdd',[OrderController::class,' orderform'])->name('orderAdd');



Route::get('/product',[ProductController::class,'index'])->name('product');
Route::get('/productAdd',[ProductController::class,'productform'])->name('productAdd');
Route::post('/newAdd',[ProductController::class,'store'])->name('newAdd');
Route::get('/deleteProduct/{id}',[ProductController::class,'delete']);


Route::get('contact',[contactController::class,'index'])->name('contact');
Route::get('contact1',[ContactController::class,'add_modal']);

Route::post('datacontact',[ContactController::class,'store']);
Route::get('deleteContact/{id}',[ContactController::class,'delete']);



Route::get('categories',[categoriesController::class,'index'])->name('categories');
Route::get('categories1',[categoriesController::class,'add_modal']);
Route::post('categoriesAdd',[categoriesController::class,'store'])->name('categoriesAdd');
Route::get('deletecategories/{id}',[categoriesController::class,'delete']);
Route::get('editProductPreview/{id}', [ProductController::class,'preview']);


Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout']);


Route::get('register', [RegistrationController::class, 'index']);
Route::post('register', [RegistrationController::class, 'store']);


