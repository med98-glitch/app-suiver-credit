<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Credits;
use App\Http\Controllers\findfolder;
use App\Http\Controllers\mailcontroller;
use Illuminate\Support\Facades\Auth;
use App\Mail\usermail;
use App\Mail\ToUser;


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
//display all folders
Route::get('/',[credits::class, 'index']);

//Find folder
Route::middleware(['auth'])->group(function () {
Route::get('rechercher',[findfolder::class, 'index']);
Route::get('/',[credits::class, 'index']);
});
//-- recherche--//
Route::get('findfolder',[findfolder::class, 'getfolders']);

Route::get('/addcredit', function () {
    return view('addcredit');
});

Route::get('/details', function () {
    return view('details');
});


Route::resource('products',credit::class);
Auth::routes();
//add credit
Route::POST('addcredits',[credit::class,'store']);
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
//detals folder
Route::get('details',[findfolder::class, 'details']);

//disable register pagephp

Route::get('/sendemil',[mailcontroller::class, 'send']);
Auth::routes(['register' => false]);
Route::get('/register', function () {
    return redirect('/');
});