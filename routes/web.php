<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
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

route::get('/',[HomeController::class,'index'] );
route::get('/home',[HomeController::class,'index'] );
route::get('/about',[AboutController::class,'index'] );
route::get('/service',[ServiceController::class,'index'] );
route::get('/contact',[ContactController::class,'index'] );
route::get('/faq',[FaqController::class,'index'] );