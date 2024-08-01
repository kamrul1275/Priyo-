<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class HomeController extends Controller
{


    function frontendIndex(){

        $total_members = User::count();
        $total_men =User::where('gender','male')->count();
        $total_women= User::where('gender','female')->count();
        //dd($total_women);


        $latest_users = User::latest()->get();

        //dd($latest_users);
        return view('frontend.layout.master',compact('total_members','total_men','total_women','latest_users'));
    }//end method


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
    }//end method


    function adminProfile(){
        $id= Auth::user()->id;
         $admin_profile=User::find($id);
         //dd($admin_profile);
        return view('backend.page.admin_profile',compact('admin_profile'));

   }//end method



   function adminProfileUpdate(Request $request){
    
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string',
        'phone' => 'required',
        'picture' => 'required',
      

    ]);

    //dd($request->all());    
    $users =new User();
    $users->name = $request->name;
    $users->email=$request->email;
    $users->phone=$request->phone;
    $users->picture=$request->picture;
    $users->save();
//dd($blogs);
    return redirect()->back();


}//end method

}
