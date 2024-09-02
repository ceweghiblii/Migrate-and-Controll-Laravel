<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerBaru;
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
Route::get('/about', function(){
    return view('about',[
        "name" => "lala",
        "email" =>"lala@gmail.com"
    ]);
})->name('about'); 
// buat nentuin routing websitenya
Route::get('/content/dashboard', function(){
    return view('content.dashboard');
});
// jngn diarahin ke header footer tp diarahin di kontennya

Route::get('/content/isiWebsite', function(){
    return view('content.isiWebsite');
});
Route::get('/controller', [controllerBaru::class, 'index']);