<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
        return view('admin.products', compact('products'));
    }

    public function prod_form()
    {
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
        $product->size = $request->size;
        $product->gender = $request->gender;
        $product->color = $request->color;
        $product->delivery_charges = $request->delivery_charges;
        $product->product_images = json_encode($data);
        // dd($product);
        $product->save();

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
}
