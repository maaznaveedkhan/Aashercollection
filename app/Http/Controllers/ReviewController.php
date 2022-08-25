<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    //
    public function post_review(Request $request){

        $review = new Review();

        $review->user_id = Auth::id();
        $review->product_id = $request->product_id;
        $review->name = $request->name;
        $review->email = $request->email;
        $review->description = $request->description;

        $review->save();

        return redirect()->back()->with('success','Your reviews has been posted');
    }
}
