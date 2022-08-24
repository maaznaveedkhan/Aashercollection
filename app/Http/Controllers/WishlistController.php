<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    //
    public function wishlist(){
        $user = Auth::user();
        $wishlists = Wishlist::with('products')->where("user_id", "=", $user->id)->orderby('id', 'desc')->get()->toArray();
    // dd($wishlists);
    return $wishlists[1];
        return view('frontend.wishlist',compact('user','wishlists'));
    }

    // public function add_to_wishlist(Request $request)
    // {
    // //Validating title and body field
    //     // $this->validate($request, array(
    //     //     'user_id'=>'required',
    //     //     'product_id' =>'required',
    //     // ));
       
    //     $wishlist = new Wishlist;

    //     $wishlist->user_id = $request->user_id;
    //     $wishlist->product_id = $request->product_id;
    //     dd($wishlist);
    //     $wishlist->save();

    //     return redirect()->back()->with('success',' Added to your wishlist.');
    // }

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
    
    


}
