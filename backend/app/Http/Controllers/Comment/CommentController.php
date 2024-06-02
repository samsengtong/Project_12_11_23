<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
class CommentController extends Controller
{
    public function index(){

        $comments = Comment::all();
        return response()->json(['comments'=>$comments,'message'=>'The record views']);
    }

    public function store(Request $request){
        $rules = [
            'name'=>'required',
            'alphabet' => 'required',
            'comment'=>'required',
            'post_id'=>'required'

        ];
        $this->validate($request, $rules);
        $data = $request->all();
        $comment = Comment::create($data);
        return response()->json(['message'=>'comment is added','comment'=>$comment]);

    }

    public function show($id){
        $comment = Comment::findOrFail($id);
        return response()->json(['comment'=>$comment,'message'=>'View data by specific ID']);        
    }

    public function delete($id){
        $comment = Comment::findOrFail($id);
        $comment->delete();
        return response()->json(['message'=>'data delete']);
    }

}
