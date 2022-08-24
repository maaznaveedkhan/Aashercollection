<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::paginate(10);
        return view('admin.products', compact('products'));
    }

    public function prod_form()
    {
        // $session_data = Session::get('attributes');
        $categories = Category::all();
        return view('admin.add_product', compact('categories'));
    }

    public function add_product(Request $request)
    {
        // return $request;
        // $validatedData = $request->validate([
        //     'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        //     'product_images' => 'required|image|mimes:jpg,png,jpeg,gif,svg',

        //    ]);

        if ($request->hasfile('product_images')) {
            foreach ($request->file('product_images') as $image) {
                $name = $image->getClientOriginalName();
                $image->move('images/product_images', $name);
                $data[] = $name;
            }
        }
        $product = new Product();
        if ($request->hasFile('product_thumbnail')) {
            $file = $request->file('product_thumbnail');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/product_images', $filename);
            $product->product_thumbnail = $filename;
        }
        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->price = $request->price;
        $product->discounted_price = $request->discounted_price;
        $product->discount_in_percentage = (($product->price - $product->discounted_price)*100) /$product->price ;
        $product->size = $request->size;
        $product->gender = $request->gender;
        $product->color = $request->color;
        $attribute_name = array();
        foreach(session()->get('attributes') as $item){
           $attribute_name[]= $item['name'];
        };
        $attribute_name_array = $attribute_name;
        $product->attribute_name = serialize($attribute_name_array);
        
        $attribute_values = array();
        foreach(session()->get('attributes') as $item){
           $attribute_values[]= $item['value'];
        };
        $attribute_value_array = $attribute_values;
        $product->attribute_values = serialize($attribute_value_array);
        $product->delivery_charges = $request->delivery_charges;
        $product->product_images = json_encode($data);
        // dd($product);
        $product->save();
        Session::forget('attibutes');
        // return unserialize($product->attribute_values);
        return redirect()
            ->route('admin_products')
            ->with('success', 'Product has been added!');
    }

    public function edit_product($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        return view('admin.edit_product', compact('product', 'categories'));
    }

    public function update_product(Request $request, $id)
    {
        $product = Product::find($id);
        if ($request->hasfile('product_images')) {
            // return ('abc');
            foreach ($request->file('product_images') as $image) {
                $name = $image->getClientOriginalName();
                $image->move('images/product_images', $name);
                $data[] = $name;
            }
        }

        if ($request->hasFile('product_thumbnail')) {
            $file = $request->file('product_thumbnail');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/product_images', $filename);
            $product->product_thumbnail = $filename;
        }
        $product->name = $request->name;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->price = $request->price;
        $product->discounted_price = $request->discounted_price;
        $product->size = $request->size;
        $product->color = $request->color;
        $product->delivery_charges = $request->delivery_charges;
        $product->product_images = json_encode($data);
        // dd($product);
        $product->save();
        
        return redirect()
            ->route('admin_products')
            ->with('success', 'Product has been Updated!');
    }

    public function view_product($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        return view('admin.view_product', compact('product', 'categories'));
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        unlink('images/product_images/' . $product->product_thumbnail);

        Product::where('id', $product->id)->delete();

        return redirect()
            ->route('admin_products')
            ->with('danger', 'Produs sters cu succes !');
    }

    //Front End
    public function product_detail($id)
    {
        $product_detail = Product::find($id);
        $products = Product::inRandomOrder()->limit(8)->get();
        return view('frontend.product_detail', compact('product_detail','products'));
    }

    // public function search(Request $request){
    //     // Get the search value from the request
    //     $search = $request->input('search');
    //     $categories = Category::all();
    
    //     // Search in the title and body columns from the posts table
    //     $products = Product::query()
    //         ->where('name', 'LIKE', "%{$search}%")
    //         ->orWhere('short_description', 'LIKE', "%{$search}%")
    //         ->paginate(10);
        
    //     // Return the search view with the resluts compacted
    //     return view('frontend.search_results', compact('products','categories'));
    // }
    public function search(Request $request){
        // $search = $request->product;
        

        $categories = Category::all();
        $products = Product::where('name', 'LIKE', $request->product.'%')
                ->paginate(15);
        
        if($request->ajax()) {
            if($request->product == ''){
                return '';
            }
            $data = Product::where('name', 'LIKE', $request->product.'%')
                ->get();
           
            $output = '';
           
            if (count($data)>0) {
              
                $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';
              
                foreach ($data as $row){
                    $url = route('product_detail',$row->id);
                    $output .= '<li class="list-group-item"><a href="'.$url.'">'.$row->name.'</a></li>';
                }
              
                $output .= '</ul>';
            }
            else {
             
                $output .= '<li class="list-group-item">'.'No results'.'</li>';
            }
           
            return $output;
        }
        return view('frontend.search_results', compact('products','categories'));
    }

}