<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    
function frontendContact(){

    return view('frontend.contact.contact');
}


    function showallContact(){
        return view('backend.contact.all_contact');
    }
}
