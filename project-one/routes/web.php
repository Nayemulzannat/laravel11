<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\demoController;
use App\Http\Controllers\bodyDataPass;
use App\Http\Controllers\headerDataPass;
use App\Http\Controllers\allDataPassSystem;
use App\Http\Controllers\fromData;
use App\Http\Controllers\fileUpload;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\demoMiddlewareController;
use App\Http\Middleware\demoMiddleware;
use App\Http\Middleware\redirectMiddleware;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\bladePractice;
use App\Http\Controllers\query_builder_practice;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//URL Data pass Route
Route::get('/hello/{name}/{age}', [demoController::class, 'demoAction']);

//Body in Data pass Route

Route::get('/bodydatapass', [bodyDataPass::class, 'bodyDataPassing']);

//Header Data Passing 

Route::get('/headerdatapass', [headerDataPass::class, 'headerDataPassing']);
//allDataPassSystem

Route::get('/alldatapass/{name}/{age}', [allDataPassSystem::class, 'allDataPassing']);

//from Data input 

Route::Post('/fromdatapass', [fromData::class, 'froDatapassing']);
//File Upload Data 

// Route::get('/fileuploadsystem', [fileUpload::class, 'fileUploData']);
Route::Post('/fileuploadsystem', [fileUpload::class, 'fileUploData']);


//Session Rout Start

Route::get('/sessionPut/{email}', [sessionController::class, 'sessionPut']);
Route::get('/sessionGet', [sessionController::class, 'sessionGet']);
Route::get('/sessionPull', [sessionController::class, 'sessionPull']);
Route::get('/sessionForget', [sessionController::class, 'sessionForget']);
Route::get('/sessionFlash', [sessionController::class, 'sessionFlash']);


// Demomiddleware Route

Route::get('/demoMiddllware', [demoMiddlewareController::class, 'demoMiddleware'])->middleware([demoMiddleware::class]);


Route::get('/redirectMiddleware/{key}', [demoMiddlewareController::class, 'redirectMiddleware'])->middleware([redirectMiddleware::class]);

Route::get('/redirectMiddlewaretwo', [demoMiddlewareController::class, 'redirectMiddlewaretwo']);


/// Resource Controllers
Route::resource('photos', PhotoController::class);


/// Blade practice
// Route::get(uri:"/", [bladePractice::class , 'homePage']);
Route::get('/', [bladePractice::class, 'homePage']);

// QueryBuilder Practice Route

Route::get('/querybuilder', [query_builder_practice::class, 'querybuilder']);