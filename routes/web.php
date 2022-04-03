<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;
use Illuminate\Support\Facades\DB;

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

    $shoes = DB::select('select * from shoes');

    $colors = DB::select('select * from colors');
    $category = DB::select('select * from category');

    return view('welcome')->with(['shoes' => $shoes])
                          ->with(['colors' => $colors])
                          ->with(['category' => $category]);
});

Route::get('/admin', function(){

    $category = DB::select('select * from category');

    return view('admin')->with(['category' => $category]);
});

Route::get('/{category}', [categoryController::class, 'category']);