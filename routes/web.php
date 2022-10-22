<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MentorController;
use App\Http\Controllers\Admin\PositionController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('role:user')->group(function(){
    Route::get('dashboard', [HomeController::class, 'index'])->name('home');
    });	
    
    Route::middleware('role:admin')->name('admin.')->prefix('admin')->group(function(){
    Route::get('admin', [AdminController::class, 'index'])->name('index');
    Route::resource('program', ProgramController::class);
    Route::resource('position', PositionController::class);
    Route::resource('mentor', MentorController::class);
    Route::resource('profile', ProfileController::class);
    
    });

    
