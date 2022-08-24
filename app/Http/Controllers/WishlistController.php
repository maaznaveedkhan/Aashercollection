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
        $wishlists = Wishlist::where("user_id", "=", $user->id)->orderby('id', 'desc')->paginate(10);
        return view('frontend.wishlist',compact('$user','wishlists'));
    }

    public function store(Request $request)
    {
    //Validating title and body field
        // $this->validate($request, array(
        //     'user_id'=>'required',
        //     'product_id' =>'required',
        // ));
        
        $wishlist = new Wishlist;

        $wishlist->user_id = $request->user_id;
        $wishlist->product_id = $request->product_id;
        // dd($wishlist);
        $wishlist->save();

        return redirect()->back()->with('success',
            'Item, '. $wishlist->product->name.' Added to your wishlist.');
    }


}
