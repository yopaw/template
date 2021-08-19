<?php
namespace App\Http\Controllers;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\ValidateAdmin;
use App\Http\Middleware\ValidateLogin;
use App\Http\Middleware\ValidateMember;
use App\Http\Middleware\ValidateSeller;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
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
Route::get('/', [ProductController::class, 'index']);
Route::get('/home', [ProductController::class, 'index'])->name('home');
Route::get('/login', \App\Http\Controllers\Auth\LoginController::class)->name('login');
Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login.authenticate');
Route::post('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/register', [UserController::class, 'create'])->name('register.create');
Route::post('/register', [UserController::class, 'store'])->name('register.store');

Route::prefix('vouchers')->name('vouchers.')->group(function(){
    Route::get('/', [VoucherController::class,'index'])->name('index');
    Route::get('/create', [VoucherController::class, 'create'])->name('create');
    Route::post('/store', [VoucherController::class, 'store'])->name('store');
});

Route::prefix('requests')->name('requests.')->group(function(){
    Route::get('/',[RequestController::class,'index'])->name('index');
    Route::get('/create', [RequestController::class,'create'])->name('create');
    Route::post('/store', [RequestController::class,'store'])->name('store');
    Route::put('/edit',[RequestController::class,'update'])->name('update');
});



Route::get('storage/{type}/{filename}', function ($type, $filename)
{
  //TODO SAVE FILE TO STORAGE
})->name('image');

Route::prefix('products')->name('products.')->group(function(){
    Route::get('/create',[ProductController::class, 'create'])->name('create');
    Route::post('/store',[ProductController::class, 'store'])->name('store');
    Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('edit');
    Route::put('/update/{product}', [ProductController::class, 'update'])->name('update');
    Route::delete('/destroy/{product}', [ProductController::class, 'destroy'])->name('destroy');
    Route::get('/manage', [ProductController::class, 'manage'])->name('manage');
    Route::get('/view', [ProductController::class, 'view'])->name('view');
    Route::get('/show/{product}', [ProductController::class,'show'])->name('show');
});

Route::prefix('reviews')->name('reviews.')->group(function(){
    Route::get('/create/{transaction}', [ReviewController::class, 'create'])->name('create');
    Route::post('/store/{transaction}', [ReviewController::class, 'store'])->name('store');
    Route::get('/edit/{review}', [ReviewController::class, 'edit'])->name('edit');
    Route::put('/edit/{review}', [ReviewController::class, 'update'])->name('update');;
});

Route::prefix('transactions')->name('transactions.')->group(function(){
    Route::get('/{type}',[TransactionController::class, 'index'])->name('index');
    Route::post('/store/{cart}', [TransactionController::class, 'store'])->name('store');
});

Route::prefix('carts')->name('carts.')->group(function(){
    Route::get('/', [CartController::class, 'index'])->name('index');
    Route::post('/{product}', [CartController::class, 'store'])->name('store');
    Route::get('/{cart}', [CartController::class, 'show'])->name('show');
    Route::delete('/{cart}/{product}', [CartController::class, 'destroy']);
});


