<?php

namespace App\Http\Controllers\backend\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    function showRegister(){

        return view('backend.auth.register');
    } //end method




    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:15',
            'password' => 'required|string|min:8',
            // 'location' => 'required|string|max:255',
            'gender' => 'required|in:male,female,other',
            'birthday' => 'required',
        ]);

       // dd($request->all());    
       $user = new User;
       $user->name = $request->input('name');
       $user->email = $request->input('email');
       $user->phone = $request->input('phone');
     
       $user->gender = $request->input('gender');
       $user->password = bcrypt($request->input('password'));
       $user->birthday = date('Y-m-d H:i:s', strtotime($request->input('birthday')));
    //    $user->location = $request->input('location');
       $user->active = $request->input('active', true);

       //dd($user);
       $user->save();


       
    
       // Auth::login($user);
    
        return redirect()->back();
    }
}
