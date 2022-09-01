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

class CartController extends Controller
{
   

    public function cart()
    {
        return view('frontend.cart');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart($id, Request $request)
    {
        $names = $request->attr_name;
        // $imp_names = implode(',',$names);
        // return $names;
        $values = $request->attr_values;
        array_pop($values);
        // $imp_values = implode(',',$values);
        //  return $values;
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);
        // $attributes = $request->attributes;
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $request->product_name,
                "quantity" => 1,
                "price" => $request->product_price,
                "delivery_charges" => $request->delivery_charges,
                "image" => $product->product_thumbnail,
                'attribute_name' => implode(',', $names),
                'attribute_values' =>implode(',',$values),
            ];
        }
        // return $request;
        session()->put('cart', $cart);
        
        return redirect()->back()->with('success', 'Product added to cart successfully!');
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
    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

    

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
                    // find vendor id through product
                    $order_number =  dechex(time());
                    $product_id = Product::find($id);
                    // $vendor_id = UserInfo::where('shop_id',$shop_id->shop_id )->first();
                    $order_item = new OrderItem();
                    // $order_item->shop_id = $product_id;
                    // $order_item->vendor_id = $vendor_id->user_id;
                    $order_item->order_id = $order_number;
                    $order_item->product_id = $product_id->id;
                    $order_item->quantity =  $details['quantity'];
                    $order_item->price = $details['price'] * $details['quantity'];
                    // $order_item->user_id = Auth::id();;
                    // $order_item->discount = 0;
                    // $order_item->item_count = $items;
                    // // $order_item->payment_method = $request->payment_method;
                    // $order_item->name = $request->name;
                    // $order_item->city = $request->city;
                    // $order_item->postal_code = $request->postal_code;
                    // $order_item->address = $request->address;
                    // $order_item->email  = $request->email;
                    // $order_item->phone_number  = $request->phone;
                    // $order_item->notes  = $request->notes;
                    // dd($order_item);
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
