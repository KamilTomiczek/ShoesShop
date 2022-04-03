<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoryController extends Controller
{
    public function category($categoryUrl)
    {

        $shoes = DB::select('SELECT *
                        FROM shoes
                        WHERE shoes.ID = (
                            SELECT category.ID
                            FROM category
                            WHERE category.name = ?
                        )', [$categoryUrl]);
    
        $colors = DB::select('select * from colors');
        $category = DB::select('select * from category');

        return view('welcome')->with(['shoes' => $shoes])
                          ->with(['colors' => $colors])
                          ->with(['category' => $category]);
    }
}
