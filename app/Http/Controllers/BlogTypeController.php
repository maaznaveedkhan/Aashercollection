<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogType;
use Illuminate\Http\Request;

class BlogTypeController extends Controller
{
    //
    public function index(){
        $blog_types = BlogType::all();
        return view('admin.blog_types',compact('blog_types'));
    }

    public function add_blog_type(Request $request)
    {  
        $blog_type = new BlogType();
        $blog_type->title = $request->title;
        // dd($blog);
        $blog_type->save();

        return redirect()
            ->back()
            ->with('success', 'blog type has been added!');
    }

    public function destroy($id){
        $blog_type = BlogType::find($id);
        $blog_type->delete();
        return redirect()->back()->with('success','blog type has been deleted!');
    }
}
