<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class MemberController extends Controller
{
    function activeMember(){

       $latest_members = User::latest()->get();
       //dd($latest_members);

        $active_members = User::where('active', true)->get();

        return view('frontend.page.member.active_member',compact('active_members','latest_members'));
        
    }//end method

    function searchMember(Request $request){
          

        $request->validate([
            'gender' => 'required|in:male,female',
        ]);
    
        $gender = $request->input('gender');
        $search_results = User::where('gender', $gender)->where('active', true)->latest()->get();
    
        return view('frontend.page.member.search_member', compact('search_results', 'gender'));
    }


    // function latestMember(){
    //     $latest_members = User::get();
    //     dd($latest_members);

    //     return view('frontend.page.member.active_member',compact('latest_members'));
    // }
}
