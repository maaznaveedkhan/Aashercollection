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
    public function orders()  
    {  
        
        $user_id = Auth::user()->id;
        $orders = DB::table('orders')->join('order_items', 'orders.order_number', 'order_items.order_id')
                    ->join('products', 'products.id', 'order_items.product_id')
                    ->where('order_items.user_id', $user_id)->select( 'products.*')->get();
                    dd( $orders);
        $orders = Order::where('user_id', $user_id)->get(); 
        // return $order_id = $orders->order_number;
        foreach ($orders as $item) {
            $order_id = $item->order_number;
        }
      $order_items = OrderItem::with('products')->where('order_id',$order_id)->get();
        foreach ($order_items as $single_item) {
            $product_id = $single_item->product_id;
        }
        $products = Product::where('id',$product_id)->get();
        return view('user.my_orders', compact('orders'));
    }
    public function my_orders(){
        
        //   $orders = Order::with('products')->get();
           $orders = Order::where('user_id',Auth::id())->get();
        // dd($orders);
        //   $order_number = $orders->order_number; 
        //    $order_no =  Order::with('order_items')->where('user_id',Auth::id())->pluck('order_number');
        //    $orders = OrderItem::with('products')->where('user_id',Auth::id())->get();
        //    echo "<pre>";
            // return $orders[0]->order_items[0]->products;
      
        return view('user.my_orders',compact('orders'));
    }

    public function order_detail($id) {
      $orders = Order::where('id', $id)->first();
        $order_id = $orders->order_number;
          $details = OrderItem::where('order_id', $order_id)->get();    //for an order with the same id we can have multiple products => array
             $product_id = OrderItem::where('order_id', $order_id)->get(['product_id']);    //accessing the product from the linked table

         $items = array();
        $products = array();
        foreach($details as $detail){
            $items[] = $detail->product_id;    //an array with all the details from the specific order

            $prod = Product::findOrFail($detail->product_id);   //we add the products with the corresponding id in our products array
            $products[] = $prod;
        }
        // dd($items);
        return view('user.order_detail', array(
            'orders' => $orders,
            'details' => $details,
            'products' => $products   //returning all the details, orders for accessing the details from Orders, details for accessing all the product's id from that order (OrderProduct and products for getting access to all the products (Products)
        ));

       
    }

    public function checkout(){
        $user_id = Auth::user()->id;
        $user_info = UserInfo::where('user_id', $user_id)->first();
        return view('frontend.checkout',compact('user_info'));
    }

    public function placeorder(Request $request){
      $oldCart = Session::get('cart');
    
       
       $total = 0;
       $quantity = 0; 
       foreach ($oldCart as $productId => $item) {
        $total = $total + ($item['price'] * $item['quantity']);
        $quantity = $quantity + $item['quantity'];
       }
    
        
        $order_number= dechex(time());
        $order = new Order;
        $order->order_number = $order_number;
        $order->name = $request->name;
        $order->phone_number = $request->phone;
        $order->email = $request->email;
        $order->address = $request->address;
        $order->city = $request->city;
        $order->user_id = Auth::user()->id;
        $order->total = $total;
        $order->item_count = $quantity;
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
            $total = $total + ($item['price'] * $item['quantity']);
        }
        // return $total;
        $user_id = Auth::user()->id;
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
