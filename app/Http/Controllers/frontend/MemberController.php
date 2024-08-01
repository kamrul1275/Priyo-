<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class MemberController extends Controller
{

    function memberPage(){

        return view('frontend.page.member.member');
    }//end method

    function activeMember(){

       $latest_members = User::latest()->get();
       //dd($latest_members);

        $active_members = User::where('active', true)->get();

        return view('frontend.page.member.active_member',compact('active_members','latest_members'));
        
    }//end method

    function searchMember(Request $request){
          

        $request->validate([
            'my_gender' => 'required',
            'seeking_gender' => 'required',
        ]);
    
        $my_gender = $request->input('my_gender');

        //dd($my_gender);
        $seeking_gender = $request->input('seeking_gender');
        //dd($seeking_gender);
    
        // Fetch users of the seeking gender
        $search_results = User::where('gender', $seeking_gender)->latest()->get();
    
        // Debugging: check search results
        dd($search_results);
        return view('frontend.page.member.search_member', compact('search_results', 'gender'));
    }


    // function latestMember(){
    //     $latest_members = User::get();
    //     dd($latest_members);

    //     return view('frontend.page.member.active_member',compact('latest_members'));
    // }
}
