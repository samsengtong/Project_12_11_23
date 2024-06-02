<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index(){
        $posts = Post::with('category')->get();
        $posts = Post::all();
        return response()->json(['posts'=>$posts, 'message'=>'Hello post created']);
    }
    public function store(Request $request){
        $rules = [

            'title'=> 'required',
            'sub_content'=>'required',
            'content'=>'required',

        ];
        $this->validate($request,$rules);
        $data = $request->all();
        $post = Post::create($data);
        return response()->json(['post'=>$post]);


    }
    public function show($id){
        $post = Post::findOrFail($id);
        return response()->json(['post'=>$post]);
    }
    public function delete($id){
        $post = Post::findOrFail($id);
        $post->delete();
        return response()->json(['message'=>'The post deleted']);
        
    }
}
