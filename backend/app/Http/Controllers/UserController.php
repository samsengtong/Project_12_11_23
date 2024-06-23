<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
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
       
         
            

    
        $request->validate([
            'name'=>'required',
        'email'=>'bail|required|unique:users',
         'password'=>['required','min:6'],
       ]);
        
        $data = $request->all();
        $data['password'] = Hash::make($request['password']);
        $data['number'] = $request->number;
        $data['user_type'] = $request->user_type;
        $user = User::create($data);
        $message = 'create successfully';
        return response()->json(['user'=>$user,'message'=>$message]);


    } 

    public function show($id){

        $user = User::findOrFail($id);
        return response()->json(['user'=>$user]);
        
    }

    public function update(Request $request, $id){

        $user = User::findOrFail($id);
      //  $this->validate($request,[
            /*
            'name'=>'string|max:191',
            //'email'=>'email|max:191,uinque:users'
            'password'=>'sometimes|string|min:6'
            
            'name'=>'required',
            'email'=>'bail|required|unique:users',
             'password'=>['required','min:6'],

            
            $request->validate([
                'name'=>'required',
          //  'email'=>'bail|required|unique:users',
             'password'=>['required','min:6'],
           ]);
     */
         
        

        
        $user->update($request->all());
      //  $message = "update successfully";
        return (['user'=>$user]);

    }


    public function destroy($id){
     $user = User::findOrFail($id);
     $user->delete();
     $message = "Delete success";
     return response()->json(['user'=>$user, 'message'=>$message]);   

    }


}
