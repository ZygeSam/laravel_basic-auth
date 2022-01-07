<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class UsersController extends Controller
{
    //
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
        $user->save();
        return redirect('dashboard')->with('message', 'You have successfully logged in');
    }

    public function signin(Request $request){
       if (Auth::attempt(['email' => $request['email'], 'password'=>$request['password']])){
        return redirect('dashboard')
        ->with('message', 'You have successfully logged in');
       }
       return back();
    }

    public function logout(){
        Auth::logout();
             return redirect('/');
        
        }
}
