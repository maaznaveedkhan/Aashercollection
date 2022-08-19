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
        // $perPage = 15;
        $category = Category::find($id);
        $category =$category->id;
        $categories = Category::with('products')->get();
        $products = Product::where('category_id',$category)->paginate(15);
        //  dd($products);
        //  return  $products;
        //  $products = Product::where('category_id',$category)->get();
        return view('frontend.popular_categories',compact('products','categories'));
    }

    

    function ajax_sort(Request $request){

    $category_id = $request->category_id;
    $select = $request->sort;
    $data=array(
        'category_id'=>$category_id,
        'select'=>$select
    );
        
    echo json_encode($data);
    }
}