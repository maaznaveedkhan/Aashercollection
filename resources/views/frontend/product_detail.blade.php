@extends('frontend.layouts.app')
@section('content')
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
                                @foreach ($images as $item)
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update=""
                                        data-image="{{ asset('images/product_images/' . $item) }}"
                                        data-zoom-image="{{ asset('images/product_images/' . $item) }}">
                                        <img src="{{ asset('images/product_images/' . $item) }}" alt="zo-th-1" />
                                    </a>
                                </li>
                                @endforeach

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
                        <form action="#">

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
                            <div class="product_variant color">
                                @php
                                    $attribute_name = unserialize($product_detail->attribute_name)
                                @endphp
                                @foreach ($attribute_name as $item)
                                    <h3>{{ $item }}</h3>
                                @endforeach
                                @php
                                    $attribute_value = unserialize($product_detail->attribute_values);
                                @endphp
                                @foreach ($attribute_value as $item)
                                    @php
                                        $collection = explode(',' , $item)
                                    @endphp
                                    <select class="niceselect_option" id="color" name="produc_color">
                                        <option selected value="1">choose in option</option>
                                        @foreach ($collection as $element)
                                            <option  value="1">{{$element}}</option>
                                        @endforeach
                                    </select>
                                @endforeach
                            </div>
                            <div class="product_variant color">
                                <h3>Color</h3>
                                <h4>{{ $product_detail->color }}</h4>
                            </div>
                            
                            {{-- <div class="product_variant color">
                                @php
                                    $attribute_name = unserialize($product_detail->attribute_name)
                                @endphp
                                @foreach ($attribute_name as $item)
                                    <h3>{{ $item }}</h3>
                                @endforeach
                                
                                <select class="niceselect_option" id="color" name="produc_color">
                                    <option selected value="1">choose in option</option>
                                    @php
                                        $attribute_values = unserialize($product_detail->attribute_values)
                                    @endphp
                                    @foreach ($attribute_values as $item)
                                    <option value="3">{{ $item }}</option>
                                    @endforeach
                                    
                                    <option value="3">choose in option3</option>
                                    <option value="4">choose in option4</option>
                                </select>
                            </div> --}}
                            <div class="product_variant size">
                                <h3>size</h3>
                                <h4>{{ $product_detail->size }}</h4>
                                {{-- <select class="niceselect_option" id="color1" name="produc_color">
                                    <option selected value="1">size</option>
                           
                                </select> --}}
                            </div>
                            <div class="product_variant quantity">
                                {{-- <label>quantity</label>
                                <input min="1" max="100" value="" type="number"> --}}
                                <a class="button" href="{{ route('add.to.cart', $product_detail->id) }}">Add to Cart</a>
                                {{-- <form action="{{ route('add.to.cart', $product_detail->id) }}">
                                    <button class="button" type="">add
                                        to cart</button>
                                </form> --}}

                            </div>
                            {{-- <div class=" product_d_action">
                                <ul>
                                    <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"
                                                aria-hidden="true"></i> Add to Wish List</a></li>
                                    <li><a href="#" title="Add to Compare"><i class="fa fa-sliders"
                                                aria-hidden="true"></i> Compare this Product</a></li>
                                </ul>
                            </div> --}}

                        </form>
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
                                {{-- <li>
                                    <a data-bs-toggle="tab" href="#sheet" role="tab" aria-controls="sheet"
                                        aria-selected="false">Data sheet</a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                        aria-selected="false">Reviews</a>
                                </li> --}}
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="info" role="tabpanel">
                                <div class="product_info_content">
                                    <p>{!! $product_detail['long_description'] !!}</p>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="sheet" role="tabpanel">
                                <div class="product_d_table">
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
                                </div>
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
                                    <form action="#">
                                        <h2>Add a review </h2>
                                        <p>Your email address will not be published. Required fields are marked </p>
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="review_comment">Your review </label>
                                                <textarea name="comment" id="review_comment"></textarea>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <label for="author">Name</label>
                                                <input id="author" type="text">

                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <label for="email">Email </label>
                                                <input id="email" type="text">
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
@endsection
