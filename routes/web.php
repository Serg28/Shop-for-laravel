<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

/*Route::get('/', function () {
    return view('home');
});*/

Route::get('/', [MainController::class, 'home']);

Route::get('/catalog', function () {
    return view('catalog');
});

Route::get('/catalog/{category}', function ($category) {
    //return view('catalog');
    return $category;
});
