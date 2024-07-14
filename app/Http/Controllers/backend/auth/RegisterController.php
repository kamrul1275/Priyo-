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
            'full_name' => 'required|string|max:255',
            'user_name' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:15',
            'password' => 'required|string|min:8',
            'location' => 'required|string|max:255',
            'gender' => 'required|in:male,female,other',
            'birthday' => 'required|date',
        ]);

        //dd($request->all());    
        $user = User::create([
            'full_name'=>$request->full_name,
            'user_name'=>$request->user_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'location' => $request->location,
            'gender' => $request->gender,
            'birthday'=>$request->birthday,
        ]);

        //dd($user);
    
       // Auth::login($user);
    
        return redirect()->back();
    }
}
