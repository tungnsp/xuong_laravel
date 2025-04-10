<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\client\ProductController as ClientProductController;
use App\Http\Controllers\client\HomeController as HomeController;

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

//Route dành cho admin
Route::prefix('admin')->group(function(){
    Route::resource('product', AdminProductController::class);
});
//Route dành cho client
Route::get('product',[ClientProductController::class, 'index']);
Route::get('product/{id}',[ClientProductController::class, 'show']);
Route::get('/',[HomeController::class,'home']);

