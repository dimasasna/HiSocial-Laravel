<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
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


Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'index']);

Route::get('/contact', function () {
    return view('contact',[
        'title' => 'Contact Us'
    ]);
});
Route::get('/portofolio', function () {
    return view('portofolio',[
        'title' => 'Portofolio'
    ]);
});
Route::get('/service', function () {
    return view('service',[
        'title' => 'Service'
    ]);
});
Route::get('/service/digital-marketing', function () {
    return view('digital-marketing',[
        'title' => 'Service'
    ]);
});
