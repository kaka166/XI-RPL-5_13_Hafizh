<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/about', function (){
    return view('about', [
        "title" => "About",
        "nama" => "Hafizh Dwi Andhika Faruq",
        "email" => "3103120100@student.smktelkom-pwt.sch.id",
        "gambar" => "senyuman.jpg"
    ]);
});

Route::get('/gallery', function (){
    return view('gallery', [
        "title" => "Gallery"
    ]);
});

Route::get('/', function (){
    return view('home', [
        "title" => "Home"
    ]);
});
Route::resource('/contacts', ContactController::class);