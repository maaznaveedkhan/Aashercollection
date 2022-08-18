<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function about_us()
    {
        $abouts = About::paginate(1);
        return view('frontend.aboutus',compact('abouts'));
    }
    public function index(){
        $abouts = About::all();
        return view('admin.about_us',compact('abouts'));
    }

    public function about_form()
    {
        $abouts = About::all();
        return view('admin.add_about', compact('abouts'));
    }

    public function add_about(Request $request)
    {
        // return $request;
        // $validatedData = $request->validate([
        //     'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        //     'product_images' => 'required|image|mimes:jpg,png,jpeg,gif,svg',

        //    ]);

       
        $about = new About();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/about_images', $filename);
            $about->image = $filename;
        }
        $about->title = $request->title;
        $about->description = $request->description;
       
        // dd($about);
        $about->save();

        return redirect()
            ->route('admin_abouts')
            ->with('success', 'About has been added!');
    }

    public function destroy($id){
        $about = About::find($id);
        $about->delete();
        return redirect()->back()->with('success','About has been deleted!');
    }
}
