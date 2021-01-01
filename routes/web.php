<?php

use App\Http\Controllers\SayHelloController;
use App\Http\Controllers\SendMailController;
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

Route::get('/settings', function () {
    return view('welcome');
});



Route::get( '/hello' , [SayHelloController::class, 'index']);
Route::get( '/about' , [SayHelloController::class, 'about']);
Route::get( '/service' , [SayHelloController::class, 'service']);

Route::get('entercredentials' , [SendMailController::class ,'enterDetails']);
Route::post('entercredentials' , [SendMailController::class ,'store']);

Route::get('/sendemail',function (){
    return view('sendemail');
});

Route::get('/send-email', [SendMailController::class,'sendEmail']);