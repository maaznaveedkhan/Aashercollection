<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\UserInfo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    //
    public function my_orders(){
        
        //   $orders = Order::with('products')->get();
        //    $orders = Order::with('order_items')->where('user_id',Auth::id())->get();
        // dd($orders);
        //   $order_number = $orders->order_number; 
        //    $order_no =  Order::with('order_items')->where('user_id',Auth::id())->pluck('order_number');
           $orders = OrderItem::with('products')->where('user_id',Auth::id())->get();
        //    echo "<pre>";
            return $orders[0]->order_items[0]->products;
      
        return view('user.my_orders',compact('orders'));
    }

    public function checkout(){
        $user_id = Auth::user()->id;
        $user_info = UserInfo::where('user_id', $user_id)->first();
        return view('frontend.checkout',compact('user_info'));
    }

    public function placeorder(Request $request){
        // return $request;
        $oldCart = Session::get('cart'); 
        // $cart = new Cart($oldCart);
        $order_number= dechex(time());
        $order = new Order;
        $order->order_number = $order_number;
        $order->name = $request->name;
        $order->phone_number = $request->phone;
        $order->email = $request->email;
        $order->address = $request->address;
        // $order->item_count = $oldCart->quantity;
        // $order->postal_code = $request->postal_code;
        $order->city = $request->city;
        $order->user_id = Auth::user()->id;
        // return $request;
        $order->save();
    
        $orderProducts = [];
        foreach ($oldCart as $productId => $item) {
            $orderProducts[] = [
                'user_id' => Auth::user()->id,
                'order_id' => $order->order_number,
                'product_id' => $productId,
                'quantity' => $item['quantity'],
                'price' => $item['price'] * $item['quantity']
            ];
        }
        // return  $orderProducts;
        $user_id = Auth::user()->id;
        // return $user_id;
        $user = UserInfo::where('user_id', $user_id)->first();
        if(empty( $user)){
            DB::table('user_infos')->insert(
                [   
                    'user_id'=>$user_id,
                    "name" => $request->name,
                    'email'  => $request->email,
                    'phone'  => $request->phone,
                    'city' => $request->city,
                    'address' => $request->address,
                    'postal_code' => $request->postal_code,
                    'created_at'=>Carbon::now(),
                ]
            );
        }else{
            
        }       
        // dd($user);
        OrderItem::insert($orderProducts);
        unset($oldCart);
        session()->put('cart', []);
        return redirect()->route('/')->with('success','Your Order has been placed...');
    }

}
