<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class HomeController extends Controller
{
    function dashboard(){

        $total_gender=User::count();
        $male_count = User::where('gender', 'male')->count();
        $female_count = User::where('gender', 'female')->count();

        return view('frontend.layout.dashboard',compact('total_gender','male_count','female_count'));
    }


    function Admindashboard(){
        return view('backend.layout.dashboard');
    } 
    
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
