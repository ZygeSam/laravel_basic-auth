<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class UsersApiController extends Controller
{
    public function index(){
        $data = ['data' => User::all()];
        return response()->json($data);
    }

    public function show($id){
        $user = User::findOrFail($id);
        $data = ['data' => $user];
        return response()->json($data);
    }

    public function signup(Request $request){
        $data= request()->validate([
            'name' => 'required|string|min:2',
            'email'=> 'required|string|min:2|unique:users',
            'password'=> 'required|string||min:2'
        ]);
        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        if($user->save()){
            return response()->json(['message'=> 'You have successfully registered as a User'], 200);
        }else{
            return http_response_code(400);
        }
         
        
    }

    public function signin(Request $request){
       if (Auth::attempt(['email' => $request['email'], 'password'=>$request['password']])){
        return redirect('dashboard')->with('message', 'You have successfully logged in');
       }
       return back();
    }

    public function logout(){
       if(Auth::logout()) {
            return redirect('/');
       }
    }
}
