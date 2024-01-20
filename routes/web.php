<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuardController;

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
    return view('welcome');
});
Route::get('testGuards', function () {
    return view('testGuards');
});

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
Route::get('testGuards',[GuardController::class,'testGuards'])->name('testGuards');
Route::get('about',[GuardController::class,'about'])->middleware('verified')->name('about');
Route::get('services',[GuardController::class,'services'])->name('services');
Route::get('team',[GuardController::class,'team'])->name('team');
Route::get('contact',[GuardController::class,'contact'])->name('contact');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('sendContactUs', [App\Http\Controllers\ContactController::class, 'sendContactUs'])->name('sendContactUs');
