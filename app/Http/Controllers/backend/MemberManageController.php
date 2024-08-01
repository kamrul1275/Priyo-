<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class MemberManageController extends Controller
{
    function allMemberManage(){

        $members =User::get();
        return view('backend.member.all_member',compact('members'));
    }//end method

    function paidMemberManage(){

        $members =User::get();
        return view('backend.member.paid_member',compact('members'));
    }//end method



function matchMemberManage(){

    $members =User::get();
    return view('backend.member.match_member',compact('members'));
    }//end method

}
