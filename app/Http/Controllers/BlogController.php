<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogType;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index(){
        $blogs = Blog::all();
        return view('frontend.blogs',compact('blogs'));
    }

    public function blog_detail($id){
        $blog = Blog::find($id);
        return view('frontend.blog_detail',compact('blog'));
    }

    public function blogs(){
        $blogs = Blog::all();
        return view('admin.blogs',compact('blogs'));
    }
    public function blog_form(){
        $blog_types = BlogType::all();
        return view('admin.add_blog',compact('blog_types'));
    }

    public function add_blog(Request $request)
    {
        // return $request;
        // $validatedData = $request->validate([
        //     'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        //     'product_images' => 'required|image|mimes:jpg,png,jpeg,gif,svg',

        //    ]);

       
        $blog = new Blog();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/blog_images', $filename);
            $blog->image = $filename;
        }
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->type = $request->blog_type_id;
       
        // dd($blog);
        $blog->save();

        return redirect()
            ->route('admin_blogs')
            ->with('success', 'blog has been added!');
    }

    public function destroy($id){
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->back()->with('success','blog has been deleted!');
    }
}
