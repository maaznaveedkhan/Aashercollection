<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     // return 'home controller';
    //     if (Auth::user()->role == 1) {
    //         return redirect()->route('admin_dashboard');
    //     } elseif (Auth::user()->role == 0) {
    //         return redirect()->route('user_dashboard');
    //     } else {
    //         return 'Credentials are not matched!';
    //     }
    // }

    public function index()
    {
        // return 'home controller';
        if (Auth::user()->role == 1) {
            return redirect()->route('admin_dashboard');
        } else {
            return redirect()->route('user_dashboard');
        }
    }

    public function user_dashboard()
    {
        return view('user.user_dashboard');
    }

    public function admin_dashboard()
    {
        $total_orders = Order::all();
        $pending_orders = Order::where('status','pending')->get();
        $orders_in_process = Order::where('status','processing')->get();
        $on_deliverey_orders = Order::where('status','ondelivery')->get();
        $delivered_orders = Order::where('status','delivered')->get();
        $cancelled_orders = Order::where('status','cancelled')->get();
        
        return view('admin.admin_dashboard',compact('total_orders','pending_orders','orders_in_process','on_deliverey_orders','delivered_orders','cancelled_orders'));
    }
}