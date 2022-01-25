<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website;
use App\Http\Controllers\SendEmailController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */
//Route::get('/',[website::class,'index']);
Route::get('send-email', [SendEmailController::class, 'sendBulkMail']);
