<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShoesModel;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Exception;
use DB;

class AddController extends Controller
{
    public function create(Request $request){

        $name = $request->input('name');

        $category_id = $request->input('category');


        $image = $request->file('file')->getRealPath();

        $file = file_get_contents($image);

        $data=array('name'=>$name,"category_id"=>$category_id,"image"=>$file);
        DB::table('shoes')->insert($data);

        $id = DB::select('select ID from shoes order by ID desc limit 1');

        foreach($request->file('color') as $color){
            $file = file_get_contents($color->getRealPath());
            $data=array('image'=>$file, 'shoe_id'=>$id[0]->ID);
            DB::table('colors')->insert($data);
        }

        return redirect('/');
    }
}
