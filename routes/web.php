<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    
});


Route::get('/redirect', [HomeController::class,'redirect']);

Route::get('/', [HomeController::class,'index']);

Route::get('/product', [AdminController::class,'product']);

Route::post('/uploadproduct', [AdminController::class,'uploadproduct']);


Route::get('/showproduct', [AdminController::class,'showproduct']);

Route::get('/deleteproduct/{id}', [AdminController::class,'deleteproduct']);


Route::get('/updateview/{id}', [AdminController::class,'updateview']);


Route::post('/updateproduct/{id}', [AdminController::class,'updateproduct']);


Route::get('/search', [HomeController::class,'search']);



Route::post('/addcard/{id}', [HomeController::class,'addcard']);


Route::get('/showcart', [HomeController::class,'showcart']);


Route::get('/delete/{id}', [HomeController::class,'deletecart']);



Route::post('/order', [HomeController::class,'confirmorder']);


Route::get('/showorder', [AdminController::class,'showorder']);


Route::get('/updatestatus/{id}', [AdminController::class,'updatestatus']);


Route::get('/view_catagory', [AdminController::class,'view_catagory']);

Route::post('/add_catagory', [AdminController::class,'add_catagory']);


Route::get('/delete_catagory/{id}', [AdminController::class,'delete_catagory']);


Route::get('/print_pdf/{id}', [AdminController::class,'print_pdf']);


Route::get('/send_email/{id}', [AdminController::class,'send_email']);



Route::get('/export-excel', [AdminController::class,'export']);

Route::post('/import-excel', [AdminController::class,'import']);




