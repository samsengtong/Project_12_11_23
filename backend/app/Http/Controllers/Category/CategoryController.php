<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        $message = "All category shown";
        return response()->json(['categorys'=>$categories,'message'=>$message]);
        

    }
    public function store(Request $request){
        $rules = [
            'name' => 'required',
            'description' => 'required'
        ];
        $this->validate($request,$rules);

        $data = $request->all();
        //$post = Post::create($data);
        $category = Category::create($data);

        //Category::create($request);
        return response()->json(['category'=>$category,'message'=>'You have create successfully']);
    }

    public function show($id){
        $category = Category::findOrFail($id);
        $message = 'The data given by specific ID shown';
        return response()->json(['message'=>$message,'category'=>$category] );
    }
    public function delete($id){
        $category = Category::findOrFail($id);
        $category->delete();
        $message = "The record delete";
        return response()->json(['message'=>$message]);


    }

}
