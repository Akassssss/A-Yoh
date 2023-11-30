<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeliController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\MerchController;
use App\Http\Controllers\PideoController;
use App\Http\Controllers\VideoController;
use GuzzleHttp\Middleware;
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
    return view('landing');
});

Route::middleware(['guest'])->group(function(){
    Route::get('/login',[SessionController::class,'login'])->name('login') ;
    Route::post('/login/signin',[SessionController::class,'signin']);
    Route::get('/register', [SessionController::class, 'register']) ;
    Route::get('/register-payment', [SessionController::class, 'register2']);
    Route::post('/create', [SessionController::class, 'create']);
    Route::post('/register3', [SessionController::class, 'register3']);
    

});

Route::middleware(['auth'])->group(function(){
    Route::get('/video', function () {
        return view('video');
    });
    
    Route::get('/pideo', function () {
        return view('pideo');
    });
    
    Route::get('/product', function () {
        return view('product');
    });

    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // });
    
    Route::get('/home',[AdminController::class,'index']); 
    Route::get('/dashboard',[AdminController::class,'admin'])->middleware('UserAkses:admin');     
    Route::get('/logout',[SessionController::class,'logout']);
    Route::get('/profile',[SessionController::class,'profile']);

    Route::post('/merch/add_cart/{id}',[MerchController::class,'add_cart']); 
    Route::get('/remove_cart/{id}',[MerchController::class,'remove_cart']); 
    Route::get('/video/{id}/watch',[VideoController::class,'watch']); 
    Route::get('/order',[MerchController::class,'order']); 
    Route::get('/cart',[MerchController::class,'cart']); 
    Route::get('/detailorder',[MerchController::class,'detailorder']); 
    Route::post('/add_address/{id}',[SessionController::class,'add_address']); 
 
    
    Route::resource('/produk',ProductController::class)->middleware('UserAkses:admin');   
    Route::resource('/merch',MerchController::class);
    Route::resource('/video',VideoController::class);
    Route::resource('/pideo',PideoController::class);
    Route::resource('/beli',BeliController::class)->middleware('UserAkses:admin');   
    Route::resource('/beli',BeliController::class)->middleware('UserAkses:admin');   


   

    Route::get('/payment', function () {
        return view('payment');
    });
});

// Route::get('/home', function () {
//     return view('home');
// }) -> middleware('isLogin');



// Route::get('/merch', function () {
//     return view('merch');
// }) -> middleware('isLogin');





Route::get('/upload', function () {
    return view('uploadmerch');
});




Route::get('aplikasi', function () {
    return view('layout/aplikasi');
});

Route::get('aplikasiadmin', function () {
    return view('layout/admin');
});

