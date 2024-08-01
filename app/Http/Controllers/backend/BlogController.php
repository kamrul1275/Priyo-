<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{



    function index(){
        return view('frontend.page.blog');
    }





    function blogsAll(){
      
        $blogs = Blog::get();
        return view('backend.blog.all_blog',compact('blogs'));
    }//end method

    function blogsCreate(){
        return view('backend.blog.create_blog');
    }//end method

    function blogsStore(Request $request){

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
          
    
        ]);

        //dd($request->all());    
        $blogs =new Blog();
        $blogs->title = $request->title;
        $blogs->description=$request->description;
        $blogs->save();
    //dd($blogs);
        return redirect()->back();
    }
    }

