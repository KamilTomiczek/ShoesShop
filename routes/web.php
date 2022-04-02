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


Route::get('/', function () {

    $shoes = DB::select('select * from shoes');

    $colors = DB::select('select * from colors');
    $category = DB::select('select * from category');

    return view('welcome')->with(['shoes' => $shoes])
                          ->with(['colors' => $colors])
                          ->with(['category' => $category]);
});

Route::get('/mens', function () {

    $shoes = DB::select('SELECT *
                        FROM shoes
                        WHERE shoes.ID = (
                            SELECT category.ID
                            FROM category
                            WHERE category.name = "Męskie"
                        )');
    
    $colors = DB::select('select * from colors');
    $category = DB::select('select * from category');

    return view('welcome')->with(['shoes' => $shoes])
                          ->with(['colors' => $colors])
                          ->with(['category' => $category]);
});

Route::get('/women', function () {

    $shoes = DB::select('SELECT *
                        FROM shoes
                        WHERE shoes.ID = (
                            SELECT category.ID
                            FROM category
                            WHERE category.name = "Damskie"
                        )');
    
    $colors = DB::select('select * from colors');
    $category = DB::select('select * from category');

    return view('welcome')->with(['shoes' => $shoes])
                          ->with(['colors' => $colors])
                          ->with(['category' => $category]);
});

Route::get('/kids', function () {

    $shoes = DB::select('SELECT *
                        FROM shoes
                        WHERE shoes.ID = (
                            SELECT category.ID
                            FROM category
                            WHERE category.name = "Dziecięce"
                        )');
    
    $colors = DB::select('select * from colors');
    $category = DB::select('select * from category');

    return view('welcome')->with(['shoes' => $shoes])
                          ->with(['colors' => $colors])
                          ->with(['category' => $category]);
});