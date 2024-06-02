<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserController extends Controller
{

    public function index(){
        $users = User::all();
        $message = "Hello";
        return response()->json(['users'=>$users,'message'=>$message]);

    }
    public function store(Request $request){
        $rules = [
            'name'=>'required',
            'email'=>'required|email|unique:user',
            'password'=>'required|min:6'


        ];
        $this->validate($request,$rules);
        $data = $request->all();
        $data['password'] = Hash::make($request['password']);
        $data['number'] = $request->number;
        //$data['user_type'] = $request->user_type;
        $user = User::create($data);
        return ['user'=>$user];


    }
}
