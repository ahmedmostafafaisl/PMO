<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SpecialController;
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
    return view('home');
});


// Route::get('register', [EmployeeController::class, 'index'])->name('register');

// Route::get('log', [EmployeeController::class, 'login']);
Route::get('login', [EmployeeController::class, 'login'])->name('login');
Route::post('custom-login', [EmployeeController::class, 'customLogin'])->name('login.custom');

Route::get('signout', [EmployeeController::class, 'signOut'])->name('signout');

// route in laravel 9
Route::controller(EmployeeController::class)->group(function () {

    Route::get('/reg', 'index')->name('register');
    // Route::get('/login', 'login')->name('login');
    Route::post('post', 'store');
    Route::get('/spcial/categories/{id}', [SpecialController::class, 'get_special_categories']);
});
