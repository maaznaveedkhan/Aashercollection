<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use App\Models\UserInfo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
   

    public function cart()
    {
        return view('frontend.cart');
    }

    public function unset(){
        $cart = Session::get('cart');
        unset($cart);
        Session::put('cart',[]);
        return redirect()->back()->with('success','Item has been removed from cart');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart($id, Request $request)
    {  
        $pro_id = 1;
        $sess_cart =Session::get('cart');
    //    return 'type of '. gettype($pro_id).'value '. $pro_id;
        if($request->buy_now == "true" && $sess_cart!= null){
          
            foreach($sess_cart as $key =>$item){
             $pro_id = $item['id'];
             $pro_id = ( int ) $pro_id;
             
            }
            return redirect()->back()->with(['prod_id'=>$pro_id, 'popup'=>true]);
        }
        $names = '';
        $values = '';
        $names = $request->attr_name;
        $values = $request->attr_values;
        if(!is_null($names) && !is_null($values)){
            $names = implode(',', $names);
            $values = implode(',',$values);
        }else{
            $names = null;
            $values = null;
        }
        
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "id" =>$id,
                "name" => $request->product_name,
                "quantity" => 1,
                "price" => $request->product_price,
                "delivery_charges" => $request->delivery_charges,
                "image" => $product->product_thumbnail,
                "attribute_name" => $names,
                "attribute_values" => $values
            ];
        }
        // return $request;
        session()->put('cart', $cart);
        if($request->buy_now == "true"){
            return redirect()->route('checkout')->with('success', 'Product added to cart successfully!');
        }else{
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove($id){
        $cart = Session::get('cart');
        unset($cart[$id]);
        Session::put('cart', $cart);
        return redirect()->back()->with('success','Item has been removed from cart');
    }

    // public function remove(Request $request)
    // {
    //     // return $request;
    //     if ($request->id) {
           
    //         $cart = session()->get('cart');
    //         if (isset($cart[$request->id])) {
    //             unset($cart[$request->id]);
    //             session()->put('cart', $cart);
    //         }
    //         session()->flash('success', 'Product removed successfully');
    //     }
    // }
    
    public function placeorder(Request $request){
        // $cart = session('cart');
        // return $request;
        $user_id = Auth::id();
        $from_user = User::findOrFail($user_id);
    //    return $user_information = UserInfo::where('user_id',$user_id)->first();
        // return dd($request);
        $order = new Order();
        $user_id = Auth::id();
        $order_number =  dechex(time());
        $total = $items = 0;
            $order->order_number = $order_number;
            $order->user_id = $user_id;
            $order->discount = 0;
            $order->total = $total;
            $order->item_count = $items;
            $order->payment_method = $request->payment_method;
            $order->name = $request->name;
            $order->city = $request->city;
            // $order->postal_code = $request->postal_code;
            $order->address = $request->address;
            $order->email  = $request->email;
            $order->phone_number  = $request->phone;
            $order->notes  = $request->notes;
            $order->save();
            // $user_id = User::findOrFail($id);
            // // return $user_id;
            // $user = UserInfo::where('user_id', $user_id)->first();
            // if(empty( $user)){
            //     DB::table('user_infos')->insert(
            //         [
            //             'user_id'=>$user,
            //             "name" => $request->name,
            //             'email'  => $request->email,
            //             'phone_number'  => $request->phone,
            //             "address" => $request->address,
            //             'city' => $request->city,
            //             'postal_code' => $request->postal_code,
            //             'created_at'=>Carbon::now(),
            //             ]
            //     );
            // }else{

            // }
            if (session('cart')) {
                // return session('cart');
                foreach (session('cart') as $id => $details) {
                    $total += $details['price'] * $details['quantity'];
                    $items += $details['quantity'];
                    $order_number =  dechex(time());
                    $product_id = Product::find($id);
                    $order_item = new OrderItem();
                    $order_item->order_id = $order_number;
                    $order_item->product_id = $product_id->id;
                    $order_item->quantity =  $details['quantity'];
                    $order_item->price = $details['price'] * $details['quantity'];
        
                    $order_item->save();
                }
            $cart = session()->get('cart');
            unset($cart);
            session()->put('cart', []);
            return redirect()->route('/')->with('success','Your Order Has been Recieved successfully');
        }
        return redirect()->route('/');

    }
}
