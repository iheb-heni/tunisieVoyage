<?php

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

Auth::routes();



// Other necessary routes (e.g., email verification) can also be defined here


Route::group(['middleware' => ['is_admin','auth'], 'prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    // booking
    Route::resource('bookings', \App\Http\Controllers\Admin\BookingController::class)->only(['index', 'destroy']);
    // travel packages
    Route::resource('travel_packages', \App\Http\Controllers\Admin\TravelPackageController::class)->except('show');
    Route::resource('travel_packages.galleries', \App\Http\Controllers\Admin\GalleryController::class)->except(['create', 'index','show']);
    // categories
    Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class)->except('show');
    // blogs
    Route::resource('blogs', \App\Http\Controllers\Admin\BlogController::class)->except('show');
    // déclaations
    Route::resource('declarations', \App\Http\Controllers\Admin\DeclarationController::class)->except('show','destroy');
    //users

    Route::resource('users', \App\Http\Controllers\Admin\UserController::class)->except('index', 'destroy');
    Route::get('users', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('users.index');
    Route::delete('users', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('users.destroy');


    // profile
    Route::get('users', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('users.index');
    Route::delete('users/{user}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('users.destroy');


    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    Route::get('declarations', [App\Http\Controllers\DeclarationController::class, 'index'])->name('declaration.index');


    Route::get('declarations', [App\Http\Controllers\Admin\DeclarationController::class, 'index'])->name('declaration.index');
    Route::delete('declarationS', [\App\Http\Controllers\DeclarationController::class, 'destroy'])->name('declaration.destroy');

    Route::delete('declarations/{declaration}', [\App\Http\Controllers\Admin\DeclarationController::class, 'destroy'])->name('declaration.destroy');

});

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('homepage');

    Route::get('userprofile', [App\Http\Controllers\user\profileController::class, 'index'])->name('dashboard');


// travel packages
Route::get('travel-packages',[\App\Http\Controllers\TravelPackageController::class, 'index'])->name('travel_package.index');
Route::get('travel-packages/{travel_package:slug}',[\App\Http\Controllers\TravelPackageController::class, 'show'])->name('travel_package.show');
// blogs
Route::get('blogs', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('blogs/{blog:slug}', [\App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');
Route::get('blogs/category/{category:slug}', [\App\Http\Controllers\BlogController::class, 'category'])->name('blog.category');
//declaration
Route::get('declarations',[\App\Http\Controllers\DeclarationController::class, 'index'])->name('declaration.index');
Route::delete('declarations', [\App\Http\Controllers\Admin\DeclarationController::class, 'destroy'])->name('declarations.destroy');

// contact
Route::get('contact', function() {
    return view('contact');
})->name('contact');
// booking
Route::post('booking', [App\Http\Controllers\BookingController::class, 'store'])->name('booking.store');


Route::post('declaration', [App\Http\Controllers\DeclarationController::class, 'store'])->name('declaration.store');
