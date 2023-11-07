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
        'title' => 'Contact Us',
        'logo' => 'assets/img/logo-hisocial.png'
    ]);
});
Route::get('/portofolio', function () {
    return view('portofolio',[
        'title' => 'Portofolio',
        'logo' => 'assets/img/logo-hisocial.png'
    ]);
});
Route::get('/service', function () {
    return view('service',[
        'title' => 'Service',
        'logo' => 'assets/img/logo-hisocial.png'
    ]);
});
Route::get('/service/media-social-management', function () {
    return view('media-social-management',[
        'title' => 'Media Social Management',
        'logo' => 'assets/img/logo-hisocial.png'
    ]);
});
Route::get('/service/digital-marketing', function () {
    return view('digital-marketing',[
        'title' => 'Digital Marketing',
        'logo' => 'assets/img/logo-hisocial.png'
    ]);
});
Route::get('/service/logo-branding-identity', function () {
    return view('logo-branding-identity',[
        'title' => 'Logo Branding Identity',
        'logo' => 'assets/img/logo-hisocial.png'
    ]);
});
Route::get('/service/branding-identity-visual', function () {
    return view('branding-identity-visual',[
        'title' => 'Branding Identity Visual',
        'logo' => 'assets/img/logo-hisocial.png'
    ]);
});
Route::get('/service/website-system-service', function () {
    return view('website-system-service',[
        'title' => 'Website & System Service',
        'logo' => 'assets/img/logo-hisocial.png'
    ]);
});

