@extends('frontend.layouts.app')
@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area other_bread">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{ route('/') }}">home</a></li>
                            <li>/</li>
                            <li>checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--Checkout page section-->
    <div class="Checkout_section" id="accordion">
       <div class="container">
            {{-- <div class="row">
               <div class="col-12">
                    <div class="user-actions">
                        <h3>
                            <i class="fa fa-file-o" aria-hidden="true"></i>
                            Returning customer?
                            <a class="Returning" href="#" data-bs-toggle="collapse" data-bs-target="#checkout_login" aria-expanded="true">Click here to login</a>
                        </h3>
                        <div id="checkout_login" class="collapse" data-parent="#accordion">
                            <div class="checkout_info">
                                <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing & Shipping section.</p>
                                <form action="#">
                                    <div class="form_group">
                                        <label>Username or email <span>*</span></label>
                                        <input type="text">
                                    </div>
                                    <div class="form_group">
                                        <label>Password  <span>*</span></label>
                                        <input type="text">
                                    </div>
                                    <div class="form_group group_3 ">
                                        <button type="submit">Login</button>
                                        <label for="remember_box">
                                            <input id="remember_box" type="checkbox">
                                            <span> Remember me </span>
                                        </label>
                                    </div>
                                    <a href="#">Lost your password?</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="user-actions">
                        <h3>
                            <i class="fa fa-file-o" aria-hidden="true"></i>
                            Returning customer?
                            <a class="Returning" href="#" data-bs-toggle="collapse" data-bs-target="#checkout_coupon" aria-expanded="true">Click here to enter your code</a>

                        </h3>
                         <div id="checkout_coupon" class="collapse" data-parent="#accordion">
                            <div class="checkout_info">
                                <form action="#">
                                    <input placeholder="Coupon code" type="text">
                                    <button type="submit">Apply coupon</button>
                                </form>
                            </div>
                        </div>
                    </div>
               </div>
            </div> --}}
            <div class="checkout_form">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        {{-- @if ($user_info->isEmpty()) --}}
                        <form action="{{route('placeorder')}}" method="post">
                            @csrf
                            <h3>Billing Details</h3>
                            
                                <div class="row">
                                    {{-- <div class="col-lg-6 mb-20">
                                        <label>First Name <span>*</span></label>
                                        <input type="text">
                                    </div>
                                    <div class="col-lg-6 mb-20">
                                        <label>Last Name  <span>*</span></label>
                                        <input type="text">
                                    </div> --}}
                                    <div class="col-12 mb-20">
                                        <label> Name</label>
                                        <input type="text" name="name" value="">
                                    </div>
                                   
                                    <div class="col-12 mb-20">
                                        <label>Street address  <span>*</span></label>
                                        <input placeholder="House number and street name" value="" name="address" type="text">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label>Town / City <span>*</span></label>
                                        <input name="city"  value="" type="text">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label>Postal Code <span>*</span></label>
                                        <input type="text" name="postal_code"  value="">
                                    </div>
                                    <div class="col-lg-6 mb-20">
                                        <label>Phone<span>*</span></label>
                                        <input type="text" name="phone"  value="">

                                    </div>
                                    <div class="col-lg-6 mb-20">
                                        <label> Email Address   <span>*</span></label>
                                        <input type="text" name="email"  value="">
                                    </div>
                                    {{-- <div class="col-12 mb-20">
                                        <input id="account" type="checkbox" data-bs-target="createp_account" />
                                        <label for="account" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne">Create an account?</label>

                                        <div id="collapseOne" class="collapse one" data-parent="#accordion">
                                            <div class="card-body1">
                                            <label> Account password   <span>*</span></label>
                                                <input placeholder="password" type="password">
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="col-12 mb-20">
                                        <input id="address" type="checkbox" data-bs-target="createp_account" />
                                        <label class="righ_0" for="address" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-controls="collapseOne">Ship to a different address?</label>

                                        <div id="collapsetwo" class="collapse one" data-parent="#accordion">
                                        <div class="row">
                                                {{-- <div class="col-lg-6 mb-20">
                                                    <label>First Name <span>*</span></label>
                                                    <input type="text" name="f_name">
                                                </div>
                                                <div class="col-lg-6 mb-20">
                                                    <label>Last Name  <span>*</span></label>
                                                    <input type="text" >
                                                </div> --}}
                                                <div class="col-12 mb-20">
                                                    <label> Name</label>
                                                    <input type="text">
                                                </div>
                                                {{-- <div class="col-12 mb-20">
                                                    <div class="select_form_select">
                                                        <label for="countru_name">country <span>*</span></label>
                                                        <select class="niceselect_option" name="cuntry" id="countru_name">
                                                            <option value="2">bangladesh</option>
                                                            <option value="3">Algeria</option>
                                                            <option value="4">Afghanistan</option>
                                                            <option value="5">Ghana</option>
                                                            <option value="6">Albania</option>
                                                            <option value="7">Bahrain</option>
                                                            <option value="8">Colombia</option>
                                                            <option value="9">Dominican Republic</option>

                                                        </select>
                                                    </div>
                                                </div> --}}
                                                <div class="col-12 mb-20">
                                                    <label>Street address  <span>*</span></label>
                                                    <input placeholder="House number and street name" type="text">
                                                </div>
                                                <div class="col-12 mb-20">
                                                    <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                                </div>
                                                <div class="col-12 mb-20">
                                                    <label>Town / City <span>*</span></label>
                                                    <input  type="text">
                                                </div>
                                                {{-- <div class="col-12 mb-20">
                                                    <label>State / County <span>*</span></label>
                                                    <input type="text">
                                                </div> --}}
                                                <div class="col-lg-6 mb-20">
                                                    <label>Phone<span>*</span></label>
                                                    <input type="text">

                                                </div>
                                                <div class="col-lg-6">
                                                    <label> Email Address   <span>*</span></label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="order-notes">
                                            <label for="order_note">Order Notes</label>
                                            <textarea id="order_note" name="notes" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="order_button">
                                            <button type="submit">Place Order</button>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    {{-- @endif --}}
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <form action="#">
                            <h3>Your order</h3>
                            @php $sub_total = 0 @endphp
                            @php $total = 0 @endphp
                            @php $shipping = 0 @endphp
                            @if(!empty(session('cart')))
                                <div class="order_table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach(session('cart') as $id => $details)
                                                @php $sub_total += $details['price'] * $details['quantity'] @endphp
                                                <tr data-id="{{ $id }}">
                                                    <td> {{ $details['name'] }}<strong> × {{ $details['quantity'] }}"</strong></td>
                                                    <td> Rs. {{ $details['price'] * $details['quantity'] }}</td>
                                                </tr>
                                                {{-- <tr data-id="{{ $id }}">
                                                    <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a>
                                                    </td>
                                                    <td class="product_thumb"  style="text-align:center; vertical-align:middle">
                                                        <a href="{{ url('product_detail') }}">
                                                            <img class="img-fluid" src="{{ asset('images/product_images/'.$details['image'])  }}"  style="max-height:25%; max-width:25%"alt="">
                                                        </a>
                                                    </td>
                                                    <td class="product_name"><a href="#">{{ $details['name'] }}</a></td>
                                                    <td class="product-price">Rs. {{ $details['price'] }}</td>
                                                    <td class="product_quantity"><input class=" quantity update-cart" min="1" max="100" value="{{ $details['quantity'] }}"
                                                            type="number"></td>
                                                    <td class="product_total">Rs. {{ $details['price'] * $details['quantity'] }}</td>
                                                </tr> --}}
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Cart Subtotal</th>
                                                <td>Rs. {{ $sub_total }}</td>
                                            </tr>
                                            <tr>
                                                <th>Shipping</th>
                                                @foreach(session('cart') as $id => $details)
                                                    @php $shipping +=$details['delivery_charges'] @endphp
                                                @endforeach
                                                <td><strong>{{ $shipping }}</strong></td>
                                            </tr>
                                            <tr class="order_total">
                                                @php $total += $sub_total + $shipping @endphp
                                                <th>Order Total</th>
                                                <td><strong>Rs. {{ $total }}</strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            @else
                            <div class="order_table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            No products were selected!
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            @endif
                            {{-- <div class="payment_method">
                               <div class="panel-default">
                                    <input id="payment" name="check_method" type="radio" data-bs-target="createp_account" />
                                    <label for="payment" data-bs-toggle="collapse" data-bs-target="#method" aria-controls="method">Create an account?</label>

                                    <div id="method" class="collapse one" data-parent="#accordion">
                                        <div class="card-body1">
                                           <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                        </div>
                                    </div>
                                </div>
                               <div class="panel-default">
                                    <input id="payment_defult" name="check_method" type="radio" data-bs-target="createp_account" />
                                    <label for="payment_defult" data-bs-toggle="collapse" data-bs-target="#collapsedefult" aria-controls="collapsedefult">PayPal <img src="assets/img/icon/papyel.png" alt=""></label>

                                    <div id="collapsedefult" class="collapse one" data-parent="#accordion">
                                        <div class="card-body1">
                                           <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="order_button">
                                    <button  type="submit">Proceed to PayPal</button>
                                </div>
                            </div> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Checkout page section end-->
@endsection
