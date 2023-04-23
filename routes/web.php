<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\buyerController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\pricingController;


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

Route::get('/', [HomeController::class, "home_main"])->name('site.home');

Route::get('/choose', [adminController::class, "askEveryone"])->name('site.user.askEveryone');




// ==================================================================================================================================
// BUYER ROUTES

Route::get('/buyer/login', [buyerController::class, "buyerLogin"])->name('site.buyer.buyer_login');
// create a post method here and route to the user home portal

Route::get('/buyer/signup', [buyerController::class, "buyerSignup"])->name('site.buyer.buyer_signup');
Route::post('/buyer/signup', [buyerController::class, "buyerSignup_process"]);

Route::get('buyer/signup/verify', [buyerController::class, "otpBuyer"])->name('site.buyer.buyer_otp');
Route::post('buyer/signup/verify', [buyerController::class, "otpBuyer_process"]);




// ==================================================================================================================================
// SELLER ROUTES

Route::get('/seller/login', [SellerController::class, "sellerLogin"])->name('site.seller.seller_login');
// create a post method here and route to the user home portal

Route::get('/seller/signup', [SellerController::class, "sellerSignup"])->name('site.seller.seller_signup');
Route::post('/seller/signup', [SellerController::class, "sellerSignup_process"]);


Route::get('seller/signup/verify', [SellerController::class, "otpSeller"])->name('site.seller.seller_otp');
Route::post('seller/signup/verify', [SellerController::class, "otpSeller_process"]);

Route::get('seller/home', [sellerController::class, 'seller_home'])->name('site.seller.seller_home');





// ==================================================================================================================================
// PRICING ROUTES

Route::get('/pricing', [pricingController::class, "pricing"])->name('site.seller.pricing');






// ==================================================================================================================================
// ADMIN ROUTES

// Route::get('/admin/home', [adminController::class, "showAdminHome"])->name('admin.home');