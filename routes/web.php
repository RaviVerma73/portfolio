<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContactFormController;


Route::get('/', function () {
    return view('welcome');
});

// ------------------------------portfolio route-----------------------------------

Route::get('protfolio', [PortfolioController::class, 'protfolio'])->name('protfolio');
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

        Route::get('contact-form',[ContactFormController::class, 'contact_form'])->name('contactform');
});
// ------------------------------Admin route-----------------------------------


