@extends('frontend.layouts.app')
@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area other_bread">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>/</li>
                            <li>cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shopping cart area start -->
    <div class="shopping_cart_area">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Delete</th>
                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product_quantity">Quantity</th>
                                            <th class="product_total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $sub_total = 0 @endphp
                                        @php $total = 0 @endphp
                                        @php $shipping = 0 @endphp
                                        @if(!empty(session('cart')))
                                            @foreach(session('cart') as $id => $details)
                                                @php $sub_total += $details['price'] * $details['quantity'] @endphp
                                                <tr data-id="{{ $id }}">
                                                    
                                                    <td class="product_remove"><a href="{{ url('delete',$id) }}"><i class="fa fa-trash-o"></i></a>
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
                                                </tr>
                                                {{-- <tr data-id="{{ $id }}">
                                                    <td data-th="Product">
                                                        <div class="row">
                                                            <div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}" width="100" height="100" class="img-responsive"/></div>
                                                            <div class="col-sm-9">
                                                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td data-th="Price">${{ $details['price'] }}</td>
                                                    <td data-th="Quantity">
                                                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />
                                                    </td>
                                                    <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                                                    <td class="actions" data-th="">
                                                        <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button>
                                                    </td>
                                                </tr> --}}
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart_submit">
                                <a class="btn" href="{{ route('/') }}">Update Cart</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--coupon code area start-->
                <div class="coupon_area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code left">
                                <h3>Coupon</h3>
                                <div class="coupon_inner">
                                    <p>Enter your coupon code if you have one.</p>
                                    <input placeholder="Coupon code" type="text">
                                    <button type="submit">Apply coupon</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code right">
                                <h3>Cart Totals</h3>
                                <div class="coupon_inner">
                                    <div class="cart_subtotal">
                                        <p>Subtotal</p>
                                        <p class="cart_amount">Rs. {{ $sub_total }}</p>
                                    </div>
                                    <div class="cart_subtotal ">
                                        <p>Shipping</p>
                                        @if (session('cart'))
                                            @foreach(session('cart') as $id => $details)
                                            @php $shipping +=$details['delivery_charges'] @endphp
                                            @endforeach
                                        @endif
                                        <p class="cart_amount"><span>Flat Rate:</span> Rs. {{ $shipping }}</p>
                                    </div>
                                    <a href="#">Calculate shipping</a>

                                    <div class="cart_subtotal">
                                        @php $total += $sub_total + $shipping @endphp
                                        <p>Total</p>
                                        <p class="cart_amount">Rs. {{ $total }}</p>
                                    </div>
                                    <div class="checkout_btn">
                                        <a href="{{ route('checkout') }}">Proceed to Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->

            </form>
        </div>
    </div>
    <!--shopping cart area end -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript">
    $( document ).ready(function() {
//         $('.update-cart').on('input', function() {
//     alert('changed');
//   });
        $('.update-cart').on('input',function (e) {
            e.preventDefault();
            var ele = $(this);
            console.log(ele)
            $.ajax({
                url: '{{ route('update.cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("td").find(".quantity").val()
                },
                success: function (response) {
                    console.log(response);
                    // alert('Page is reloading');
                    window.location.reload();
                }
            });
        });

    });
    </script>
@endsection
