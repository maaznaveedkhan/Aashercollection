<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories', compact('categories'));
    }

    public function add_category(Request $request)
    {
        // return $request;
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);
        $category = new Category();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/category_images', $filename);
            $category->image = $filename;
        }
        $category->title = $request->title;
        $category->description = $request->description;

        $category->save();

        return redirect()->route('admin_categories')->with('success', 'Category has been added!');
    }

    public function delete_category($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('admin_categories')->with('success', 'Category has been delete!');
    }

    public function popular_categories($id){
        $category = Category::find($id);
        $products = Product::where('category_id',$category)->get();
        return view('frontend.popular_categories');
    }

    public function about_us()
    {
        return view('frontend.aboutus');
    }

    public function contact_us()
    {
        return view('frontend.contactus');
    }

    public function privacy_policy(){
        return view('frontend.privacy_policy');
    }
}