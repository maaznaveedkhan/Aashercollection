<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
   

    public function wishlist(){
        
        $user = Auth::user();
        // $wishlist = Wishlist::with('products')->where("user_id", "=", $user->id)->get()->toArray();
        // dd($wishlist);
        $wishlists = Wishlist::where("user_id", "=", $user->id)->orderby('id', 'desc')->get();
        // dd($wishlists);
        // return $wishlists[1];
        return view('frontend.wishlist',compact('user','wishlists'));
    }

    

    public function add_to_wishlist($id)
    {

        $user_id = Auth::id();
        $product_id = Product::findOrFail($id);
    //    return gettype($product_id); 
        $wishlist = Wishlist::where('product_id','=',$product_id->id)->where('user_id','=',$user_id)->first();
       
        if($wishlist == null) {
            $wishlist = new Wishlist;

            $wishlist->user_id = $user_id;
            $wishlist->product_id = $product_id->id;
            $wishlist->status = 'true';
            // dd($wishlist);
            $wishlist->save();
            
            return redirect()->back()->with('success',' Added to your wishlist.');
        } else{
            return redirect()->back()->with('success','Product already exists in wishlist') ;
        }
        
    }
     
    public function remove_from_wishlist($id){
        $wishlist = Wishlist::find($id);
        $wishlist->delete();

        return redirect()->back()->with('success','Product has been removed from wishlist wishlist') ;
    }
    
    public function search(Request $request){
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
                    // $url = route('find_product',$row->id);
                    $output .= '<li class="list-group-item"><a id="product_find" href="">'.$row->name.'</a></li>';
                }
              
                $output .= '</ul>';

            }
            else {
             
                $output .= '<li class="list-group-item">'.'No results'.'</li>';
            }
           
            return $output;
        }
    }

    public function find_product(Request $request){
        if($request->ajax()) {
            $product = Product::findorFail($request->product_id);
            return response($product);
        }
        
    }

    public function autosearch(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::where('name','LIKE',$request->product.'%')->get();
            $output = '';
            if (count($data)>0) {
                $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1;">';
                foreach ($data as $row) {
                    // $id = $row->id;

                    $output .= '<li class="list-group-item">
                    <a pro_id="'.$row->id.'" id="'.$row->id.'" class="search">'.$row->name.'</a>
                    
                   
                    </li>';
                }
                $output .= '</ul>';
            }else {
                $output .= '<li class="list-group-item">'.'No Data Found'.'</li>';
            }
            return $output;
        }

        return view('frontend.compare');  
    }

    public function compare($id){

        $product = Product::findorFail($id);
        $categories = Category::all();
        $product = Product::where('id',  $product->id)->first();

        return view('frontend.compare', compact('product','categories'));
    }

}
