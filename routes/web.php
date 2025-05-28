<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContactFormController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\WorkController;


// Route::get('/', function () {
//     return view('welcome');
// });

// ------------------------------portfolio route-----------------------------------

Route::get('/', [PortfolioController::class, 'protfolio'])->name('portfolio');
Route::post('contact', [PortfolioController::class, 'contact'])->name('contact');

// ------------------------------portfolio route-----------------------------------



// ------------------------------Admin route-----------------------------------
Route::group([
    'middleware' =>['guest']
],function(){
    Route::match(['get','post'], 'register', [AuthController::class, 'register'])->name('register');
    Route::match(['get','post'], 'login', [AuthController::class, 'login'])->name('login');
});

Route::group([
    'middleware'=>['auth']
],function(){
        Route::get('dashboard',[AuthController::class, 'dashboard'])->name('dashboard');
        Route::match(['get','post'], 'profile', [AuthController::class, 'profile'])->name('profile');
        Route::get('logout',[AuthController::class, 'logout'])->name('logout');
        // --------------------------------about-us-----------------------------------------
        Route::get('about-us', [AboutController::class, 'list'])->name('about-us');
        Route::match(['get','post'], 'about-us/add', [AboutController::class, 'add'])->name('add');
        Route::match(['get','post'], 'about-us/edit/{i}', [AboutController::class, 'edit'])->name('edit');
        Route::post('about-us/update', [AboutController::class , 'update'])->name('update');
        Route::get('about-us/delete/{id}', [AboutController::class , 'delete'])->name('delete');
        // --------------------------------about-us-----------------------------------------

        // --------------------------------Services-----------------------------------------
        Route::get('services',[ServicesController::class, 'list'])->name('services');
        Route::match(['get','post'], 'services/add',[ServicesController::class, 'add'])->name('services.add');
        Route::match(['get','post'], 'services/edit/{id}',[ServicesController::class, 'edit'])->name('services.edit');
        Route::post('services/update',[ServicesController::class, 'update'])->name('services.update');
        Route::get('services/delete/{id}', [ServicesController::class , 'delete'])->name('services.delete');
        // --------------------------------Services-----------------------------------------

        // --------------------------------Blog-----------------------------------------
        Route::get('blog',[BlogController::class,'list'])->name('blog');
        Route::match(['get','post'], 'blog/add',[BlogController::class, 'add'])->name('blog.add');
        Route::match(['get','post'], 'blog/edit/{id}',[BlogController::class, 'edit'])->name('blog.edit');
        Route::post('blog/update',[BlogController::class, 'update'])->name('blog.update');
        Route::get('blog/delete/{id}',[BlogController::class, 'delete'])->name('blog.delete');
        // --------------------------------Blog-----------------------------------------

        // --------------------------------Work-----------------------------------------
        Route::get('work',[WorkController::class,'list'])->name('work');
        Route::match(['get','post'], 'work/add',[WorkController::class, 'add'])->name('work.add');
        Route::match(['get','post'], 'work/edit/{id}',[WorkController::class, 'edit'])->name('work.edit');
        Route::post('work/update',[WorkController::class, 'update'])->name('work.update');
        Route::get('work/delete/{id}',[WorkController::class, 'delete'])->name('work.delete');
        // --------------------------------Work-----------------------------------------

        Route::get('contact-form',[ContactFormController::class, 'contact_form'])->name('contactform');
});
// ------------------------------Admin route-----------------------------------


