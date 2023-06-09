<?php
use App\Http\Controllers\customerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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

Route::get('/', function () {
    return view('welcome');
});

//customer 
Route::get('customer/home',[customerController::class,'home']);
Route::post('customer/insert',[customerController::class,'insert'])->name('customer#insert');
Route::get('customer/read',[customerController::class,'read'])->name('customer#read');


