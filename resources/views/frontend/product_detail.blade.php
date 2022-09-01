@extends('frontend.layouts.app')
@section('content')
<?php
    $attributy ='';
?>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area product_bread">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>/</li>
                            <li>product details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--product details start-->
    <div class="product_details">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <div class="product-details-tab">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1"
                                    src="{{ asset('images/product_images/' . $product_detail['product_thumbnail']) }}"
                                    data-zoom-image="{{ asset('images/product_images/' . $product_detail['product_thumbnail']) }}"
                                    alt="big-1">
                            </a>
                        </div>
                        <div class="single-zoom-thumb">
                            <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                @php
                                    $images = json_decode($product_detail->product_images)
                                @endphp
                                @if (!empty($images))
                                    @foreach ($images as $item)
                                        <li>
                                            <a href="#" class="elevatezoom-gallery active" data-update=""
                                                data-image="{{ asset('images/product_images/' . $item) }}"
                                                data-zoom-image="{{ asset('images/product_images/' . $item) }}">
                                                <img src="{{ asset('images/product_images/' . $item) }}" alt="zo-th-1" />
                                            </a>
                                        </li>
                                    @endforeach
                                @endif

                                </li>
                                {{-- <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update=""
                                        data-image="assets/img/product/product2.jpg"
                                        data-zoom-image="assets/img/product/product2.jpg">
                                        <img src="assets/img/s-product/product4.jpg" alt="zo-th-1" />
                                    </a>

                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="product_d_right">
                        {{-- <form action="#"> --}}

                            <h1>{{ $product_detail['name'] }}</h1>
                            <div class=" product_ratting">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="review"><a href="#"> 1 review </a></li>
                                    <li class="review"><a href="#"> Write a review </a></li>
                                </ul>
                            </div>
                            <div class="product_price">
                                <span class="current_price">Rs. {{ $product_detail['discounted_price'] }}</span>
                            </div>
                            <div class="product_desc">
                                <p>{{ $product_detail['short_description'] }} </p>
                            </div>
                            <form action="{{ route('add.to.cart',$product_detail['id'])}}" method="GET">
                                <input type="hidden" name="product_id" value="{{$product_detail['id']}}">
                                <input type="hidden" name="product_name" value="{{$product_detail['name']}}">
                                @if (!empty($product_detail['discounted_price']))
                                    <input type="hidden" name="product_price" value="{{$product_detail['discounted_price']}}">
                                @else
                                    <input type="hidden" name="product_price" value="{{$product_detail['price']}}">
                                @endif
                                <input type="hidden" name="delivery_charges" value="{{$product_detail['delivery_charges']}}">
                                <div class="product_variant color">
                                    
                                    @php
                                        $attribute_name = unserialize($product_detail->attribute_name);
                                        
                                    @endphp
                                    @if (!empty($attribute_name))
                                        <ul >
                                            @foreach ($attribute_name as $key => $title)
                                            <?php
                                                $attributy = $title;?> 
                                            <li>
                                                <h3>{{ $title }}</h3>
                                            </li>
                                            <h1  style="background-color:green;display:none" id="gettext{{$key}}">{{$attributy}}</h1>
                                            <p style="display: none" id="totalCounter">{{count($attribute_name)}}</p>
                                            @endforeach
                                        </ul>
                                        @php
                                            $attribute_value = unserialize($product_detail->attribute_values);
                                        @endphp 
                                    @endif
                                    @if (!empty($attribute_value))
                                        <ul>
                                            @foreach ($attribute_value as $key => $item)
                                         
                                            @php
                                                $collection = explode(',' , $item);
                                            @endphp
                                            <li  style="padding-top: 0.75rem;"> 
                                                <input type="hidden" name="attr_name[]" id="fill{{$key}}" value="">
                                                <input type="hidden" name="attr_values[]" id="at_val" value="">
                                                <select class="niceselect_option" required id="putme{{$key}}" name="" onchange="getval(this);">
                                                <option option="">choose in option</option>
                                                @foreach ($collection as $element)
                                                    <option  value="{{$element}}">{{$element}}</option>
                                                @endforeach 
                                                
                                                </select>
                                            </li>
                                            @endforeach
                                        </ul>
                                        
                                    @endif
                                </div>
                                <div class="product_variant quantity">
                                    {{-- <label>quntity</label>
                                    <input min="1" max="100" value="" type="number"> --}}
                                    <button class="button" type="submit">Add to Cart</button>
                                    <a class="button" style="margin-left: 1rem;" href="{{ route('checkout') }}">Buy Now</a>
                                </div>
                            </form>
                            <div class=" product_d_action">
                                <ul>
                                    <li>
                                        @auth
                                        <li>
                                            <a href="{{ route('add_to_wishlist',$product_detail->id) }}"> <i class="fa fa-heart-o"
                                                aria-hidden="true"></i> Add to Wish List</a>
                                            
                                        </li>
                                        @endauth
                                        {{-- <a href="{{ route('add_to_wishlist',$product_detail->id) }}" title="Add to wishlist"><i class="fa fa-heart-o"
                                            aria-hidden="true"></i> Add to Wish List</a> --}}
                                    </li>
                                    <li><a href="{{ route('compare',$product_detail->id) }}" title="Add to Compare"><i class="fa fa-sliders"
                                                aria-hidden="true"></i> Compare this Product</a></li>
                                </ul>
                            </div>

                        {{-- </form> --}}
                        <div class="priduct_social">
                            <h3>Share on:</h3>
                            <ul>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product details end-->

    <!--product info start-->
    <div class="product_d_info">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_d_inner">
                        <div class="product_info_button">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-bs-toggle="tab" href="#info" role="tab"
                                        aria-controls="info" aria-selected="false">More info</a>
                                </li>
                                 <li>
                                    <a data-bs-toggle="tab" href="#sheet" role="tab" aria-controls="sheet"
                                        aria-selected="false">Data sheet</a>
                                </li>
                               <li>
                                    <a data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                        aria-selected="false">Reviews</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="info" role="tabpanel">
                                <div class="product_info_content">
                                    <p>{!! $product_detail['long_description'] !!}</p>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="sheet" role="tabpanel">
                                <div class="product_info_content">
                                    <p>{!! $product_detail['datasheet'] !!}</p>
                                </div>
                                {{-- <div class="product_d_table">
                                    <form action="#">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="first_child">Compositions</td>
                                                    <td>Polyester</td>
                                                </tr>
                                                <tr>
                                                    <td class="first_child">Styles</td>
                                                    <td>Girly</td>
                                                </tr>
                                                <tr>
                                                    <td class="first_child">Properties</td>
                                                    <td>Short Dress</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                                <div class="product_info_content">
                                    <p>Fashion has been creating well-designed collections since 2010. The brand offers
                                        feminine designs delivering stylish separates and statement dresses which have since
                                        evolved into a full ready-to-wear collection in which every item is a vital part of
                                        a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and
                                        unmistakable signature style. All the beautiful pieces are made in Italy and
                                        manufactured with the greatest attention. Now Fashion extends to a range of
                                        accessories including shoes, hats, belts and more!</p>
                                </div> --}}
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel">
                                <div class="product_info_content">
                                    <p>Fashion has been creating well-designed collections since 2010. The brand offers
                                        feminine designs delivering stylish separates and statement dresses which have since
                                        evolved into a full ready-to-wear collection in which every item is a vital part of
                                        a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and
                                        unmistakable signature style. All the beautiful pieces are made in Italy and
                                        manufactured with the greatest attention. Now Fashion extends to a range of
                                        accessories including shoes, hats, belts and more!</p>
                                </div>
                                <div class="product_info_inner">
                                    <div class="product_ratting mb-10">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                        <strong>Posthemes</strong>
                                        <p>09/07/2018</p>
                                    </div>
                                    <div class="product_demo">
                                        <strong>demo</strong>
                                        <p>That's OK!</p>
                                    </div>
                                </div>
                                <div class="product_review_form">
                                    <form action="{{ route('post_review') }}" method="POST">
                                        @csrf
                                        <h2>Add a review </h2>
                                        <p>Your email address will not be published. Required fields are marked </p>
                                        <div class="row">
                                            <input type="hidden" name="product_id" value="{{$product_detail['id']}}" id="">
                                            <div class="col-12">
                                                <label for="review_comment">Your review </label>
                                                <textarea name="description" required id="review_comment"></textarea>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <label for="author">Name</label>
                                                <input id="author" name="name" required type="text">

                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <label for="email">Email </label>
                                                <input id="email" name="email" required type="email">
                                            </div>
                                        </div>
                                        <button type="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product info end-->

    <!--product section area start-->
    <section class="product_section related_product">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Related Products</h2>
                        <p>Contemporary, minimal and modern designs embody the Lavish Alice handwriting</p>
                    </div>
                </div>
            </div>
            <div class="product_area">
                <div class="row">
                    <div class="product_carousel product_three_column4 owl-carousel">
                        @foreach ($products as $item)
                        <div class="col-lg-3">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img
                                            src="{{ asset('images/product_images/'.$item->product_thumbnail) }}" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img
                                            src="{{ asset('images/product_images/'.$item->product_thumbnail) }}" alt=""></a>
                                    <div class="product_action">
                                        <div class="hover_action">
                                            <a href="#"><i class="fa fa-plus"></i></a>
                                            <div class="action_button">
                                                <ul>
                                                    <li><a title="add to cart" href="{{ route('add.to.cart',$item->id) }}"><i
                                                                class="fa fa-shopping-basket" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>

                                                    <li><a href="compare.html" title="Add to Compare"><i
                                                                class="fa fa-sliders" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="quick_button">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                            title="quick_view">+ quick view</a>
                                    </div>

                                    <div class="product_sale">
                                        <span>-7%</span>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <h3><a href="product-details.html">{{ $item->name }}</a></h3>
                                    <span class="current_price">Rs. {{ $item->discounted_price }}</span>
                                    <span class="old_price">Rs. {{ $item->price }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--product section area end-->

    <!--product section area start-->
    <section class="product_section upsell_product">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Upsell Products</h2>
                        <p>Contemporary, minimal and modern designs embody the Lavish Alice handwriting</p>
                    </div>
                </div>
            </div>
            <div class="product_area">
                <div class="row">
                    <div class="product_carousel product_three_column4 owl-carousel">
                        @foreach ($products as $item)
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('product_detail',$item->id) }}"><img src="{{ asset('images/product_images/'.$item->product_thumbnail) }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('product_detail',$item->id) }}">
                                            @php
                                                $images = json_decode($item->product_images);
                                            @endphp
                                                <img height="50px" width="50px" class="img-fluid" src="{{ asset('images/product_images/'.$images[0]) }}" alt="">
                                            {{-- {{ dd($images[1]) }} --}}
                                        </a>
                                        <div class="product_action">
                                            <div class="hover_action">
                                            <a  href="{{ route('product_detail',$item->id) }}"><i class="fa fa-plus"></i></a>
                                            <div class="action_button">
                                                <ul>
                                                    <li><a title="add to cart" href="{{ route('add.to.cart',$item->id) }}"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                    {{-- <li><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#product_details{{$item->id}}" data-bs-toggle="modal" data-bs-target="#product_details{{$item->id}}" title="quick_view">+ quick view</a>
                                        </div>
                                        @if (empty($item->discount))
                                            
                                        @else
                                        <div class="product_sale">
                                            <span>-{{$item->discount}}%</span>
                                        </div>
                                        @endif
                                        
                                    </div>
                                    <div class="product_content">
                                        <h3><a href="product-details.html">{{ $item->name }}</a></h3>
                                        <span class="current_price">Rs. {{ $item->discounted_price }}</span>
                                        <span class="old_price">Rs. {{ $item->price }}</span>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        @endforeach
                        {{-- @foreach ($products as $item)
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="{{ asset('images/product_images/'.$item->product_thumbnail) }}" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="{{ asset('images/product_images/'.$item->product_thumbnail) }}" alt=""></a>
                                        <div class="product_action">
                                            <div class="hover_action">
                                                <a href="#"><i class="fa fa-plus"></i></a>
                                                <div class="action_button">
                                                    <ul>
                                                        <li><a title="add to cart" href="{{ route('add.to.cart',$item->id) }}"><i
                                                                    class="fa fa-shopping-basket" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                    class="fa fa-heart-o" aria-hidden="true"></i></a></li>

                                                        <li><a href="compare.html" title="Add to Compare"><i
                                                                    class="fa fa-sliders" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#product_details{{$item->id}}" data-bs-toggle="modal" data-bs-target="#product_details{{$item->id}}" title="quick_view">+ quick view</a>
                                        </div>

                                        <div class="product_sale">
                                            <span>-7%</span>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <h3><a href="product-details.html">{{ $item->name }}</a></h3>
                                        <span class="current_price">Rs. {{ $item->discounted_price }}</span>
                                        <span class="old_price">Rs. {{ $item->price }}</span>
                                    </div>
                                </div>
                            </div>
                            
                        @endforeach --}}
                        @foreach ($products as $item)
                             <!-- modal area start-->
                            <div class="modal fade" id="product_details{{$item->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div class="modal_body">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-5 col-sm-12">
                                                        <div class="modal_tab">
                                                            <div class="tab-content product-details-large">
                                                                <div class="tab-pane fade show active" id="{{$item->id}}" role="tabpanel">
                                                                    <div class="modal_tab_img">
                                                                        <a href="#"><img src="{{ asset('images/product_images/' . $item->product_thumbnail) }}"
                                                                                alt=""></a>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="tab2" role="tabpanel">
                                                                    <div class="modal_tab_img">
                                                                        <a href="#"><img src="assets/img/product/product6.jpg"
                                                                                alt=""></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal_tab_button">
                                                                @php
                                                                    $images = json_decode($item->product_images)
                                                                @endphp
                                                                <ul class="nav product_navactive owl-carousel" role="tablist">
                                                                    @foreach ($images as $element)
                                                                    <li>
                                                                        <a class="nav-link active" data-bs-toggle="tab" href="#{{$item->id}}"
                                                                            role="tab" aria-controls="tab1" aria-selected="false"><img
                                                                                src="{{ asset('images/product_images/' . $element) }}" alt=""></a>
                                                                    </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7 col-md-7 col-sm-12">
                                                        <div class="modal_right">
                                                            <div class="modal_title mb-10">
                                                                <h2>Test</h2>
                                                            </div>
                                                            <div class="modal_price mb-10">
                                                                <span class="new_price">Rs. {{ $item->discounted_price }}</span>
                                                                <span class="old_price">Rs. {{ $item->price }}</span>
                                                            </div>
                                                            <div class="modal_description mb-15">
                                                                <p>{{ $item->short_description }}</p>
                                                            </div>
                                                            <div class="variants_selects">
                                                                <div class="variants_size">
                                                                    <h2>size</h2>
                                                                    <p>{{ $item->size }}</p>
                                                                </div>
                                                                <div class="variants_color">
                                                                    <h2>color</h2>
                                                                    <p>{{ $item->color }}</p>
                                                                </div>
                                                                <div class="modal_add_to_cart">
                                                                    <form action="{{ route('add.to.cart',$item->id) }}">
                                                                        <input class=" quantity update-cart" min="1" max="100" value="1" type="number">
                                                                        <button type="submit">add to cart</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="modal_social">
                                                                <h2>Share this product</h2>
                                                                <ul>
                                                                    <li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                                                    </li>
                                                                    <li class="twitter"><a href="https://twitter.com/login"><i class="fa fa-twitter"></i></a>
                                                                    </li>
                                                                    <li class="pinterest"><a href="https://www.pinterest.com/"><i
                                                                                class="fa fa-pinterest"></i></a>
                                                                    </li>
                                                                    <li class="google-plus"><a href="https://accounts.google.com/ServiceLogin?ltmpl=mobNH"><i
                                                                                class="fa fa-google-plus"></i></a></li>
                                                                    <li class="linkedin"><a href="https://www.linkedin.com/login"><i class="fa fa-linkedin"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- modal area start-->
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--product section area end-->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script>
    function submitForm(){ 
    // Call submit() method on <form id='myform'>
    document.getElementById('myform').submit(); 
    } 
// $('#myform').on('change', function(e){
//     e.preventDefault();
//     form.submit();
// });
   var counter = $('#totalCounter').text();
//    console.log(counter);
    var att_values = [];
    var val_at =[];
    for(i=0; i<counter; i++){
        var attribute_name = $(`#gettext${i}`).text();
        var putme = $(`#putme${i}`).attr("name", attribute_name);
        var fill = $(`#fill${i}`).attr("value", attribute_name);
        var selected = $(`#putme${i}`).find(":selected").val();
        $(`#putme${i}`).on('change', function() {
            alert( this.value );
    });
    console.log(selected);
    function getval(sel)
    {
        const searchIndex = att_values.findIndex((att_values) => att_values.id==sel.id);
        if(searchIndex != -1){
            var newArray = att_values.filter((item) => item.id !== sel.id);
            att_values = newArray;
            var obj = {id:sel.id, value:sel.value};
            att_values.push(obj);
            }else{
                var obj = {id:sel.id, value:sel.value};
            att_values.push(obj);
           
        }
        // var at_val = [];
        // for(a=0; a<counter; a++){
        //     var at_val = $(`#at_val${a}`).attr("value", att_values);
        // }
        
        val_at = [];
        for(a=0; a<att_values.length; a++){
            val_at.push(att_values[a].value)
        }
        $('#at_val').attr("value", val_at);
        // console.log(at_val);
        
        console.log('att_values', att_values[0].value);
        console.log('val at ', val_at);
    }
    
   }

   
   

</script>
{{-- {{ dd($attributy) }} --}}
@endsection
