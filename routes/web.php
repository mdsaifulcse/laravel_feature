<?php

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

## Firebase Otp Authentication -------------------

 Route::get('/opt-sent-authentication',[App\Http\Controllers\FireBaseOtpController::class,'firebaseOtp']);


Route::get('/', function () {
    return view('welcome');
});

## Api Integration ------------
Route::get('/test',function(){
    return 'Allah is Almighty';
});

Route::get('/posts',[ApiIntregrateController::class,'showAllPost']);
Route::get('/posts/{id}',[ApiIntregrateController::class,'showSinglePost']);

Route::get('/add-post',[ApiIntregrateController::class,'addPost']);
Route::get('/edit-post/{id}',[ApiIntregrateController::class,'editPost']);
Route::get('/delete-post/{id}',[ApiIntregrateController::class,'deletePost']);


/*-- Md.Saiful Islam --*/

Route::group(['middleware'=>['auth'],'prefix'=>'good'],function(){

	
});
	Route::get('test-admin',[App\Http\Controllers\AdminController::class,"index"]);



Route::view('test','components.test');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
