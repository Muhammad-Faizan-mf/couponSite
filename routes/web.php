<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\site\NavbarController;
use App\Http\Controllers\Site\StoreController;
use App\Http\Controllers\UserController;
use App\Models\Blog;
use Illuminate\Support\Facades\Artisan;

///CRM Routes


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('login', [AuthController::class, 'index'])->name('login');

Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');

// Route::get('registration', [AuthController::class, 'registration'])->name('register');

// Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');

// Route::get('dashboard', [AuthController::class, 'dashboard']);

Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::get('dashboard', [UserController::class, 'dashboard']);
Route::get('users', [UserController::class, 'users']);
// Route::get('categories', [CategoryController::class, 'categories']);


Route::resource('category', CategoryController::class)->middleware('auth');
Route::resource('blogs', BlogController::class)->middleware('auth');
Route::resource('brands', BrandController::class)->middleware('auth');
Route::resource('coupons', CouponController::class)->middleware('auth');
Route::resource('faqs', FaqController::class)->middleware('auth');



// For site routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blog', [NavbarController::class, 'index'])->name('blogs');
Route::get('/promo-codes',[NavbarController::class,'promoCodes']);
Route::get('/categories',[NavbarController::class,'categories']);
Route::get('/store',[StoreController::class,'index']);


// Route::get('/db-test', function () {
//     try {
//         \DB::connection()->getPdo();
//         return "Connected to DB: " . \DB::connection()->getDatabaseName();
//     } catch (\Exception $e) {
//         return "DB connection error: " . $e->getMessage();
//     }
// });


Route::get('/run-composer-update', function () {
    $output = shell_exec('composer update 2>&1');
    return "<pre>$output</pre>";
});
Route::get('/test', function () {
    return view('test');
});






// Route::get('/store', function () {
//     return view('site.store');
// });
