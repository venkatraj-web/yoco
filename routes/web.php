<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Forms\contactFormController;

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

// Route::get("/contact", function(){
//     return view('layouts.home');
// });

Route::get("/", function(){
    return view('layouts.index');
});

Route::get("/ai-solutions", function(){
    return view('layouts.ai-solutions');
});
Route::get("/product", function(){
    return view('layouts.product');
});
Route::get("/industries", function(){
    return view('layouts.industries');
});
Route::get("/about", function(){
    return view('layouts.about');
});

Route::get("/contact", function(){
    return view('layouts.contact');
});
Route::post("/contact/store", [contactFormController::class, "StoreContactForm"]);