<?php

namespace App\Http\Controllers;

use App\Models\InstagramPost;
use Illuminate\Http\Request;

class InstaPostController extends Controller
{
    //
    public function index(){
        $instas = InstagramPost::all();
        return view('admin.insta_posts',compact('instas'));
    }

    public function insta_form(){
        return view('admin.add_insta_post');
    }

    public function add_insta(Request $request)
    {
        // return $request;
        // $validatedData = $request->validate([
        //     'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        //     'product_images' => 'required|image|mimes:jpg,png,jpeg,gif,svg',

        //    ]);

       
        $insta = new InstagramPost();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/insta_images', $filename);
            $insta->image = $filename;
        }
        $insta->title = $request->title;
        $insta->description = $request->description;
        $insta->link = $request->link;
        $insta->status = 0;
       
        // dd($insta);
        $insta->save();

        return redirect()
            ->route('admin_insta')
            ->with('success', 'Insta Post has been added!');
    }

    public function destroy($id){
        $insta = InstagramPost::find($id);
        $insta->delete();
        return redirect()->back()->with('success','Instagram Post has been deleted!');
    }
}
