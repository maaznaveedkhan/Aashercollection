@extends('frontend.layouts.app')
@section('content')
    <!--banner area start-->
    <section class="banner_section banner_section_eight">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-4 col-md-6">
                    <div class="banner_area">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="{{ asset('frontend/img/bg/banner29.jpg') }}" alt="#"></a>
                            <div class="banner_content">
                                <h1>#For Women</h1>
                                <p>Sale 10% Off Almost Everything</p>
                                <a href="shop.html">Discover Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="banner_area">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="{{ asset('frontend/img/bg/banner30.jpg') }}" alt="#"></a>
                            <div class="banner_content">
                                <h1>#Accessories</h1>
                                <p>Sale 40% Off Almost Everything</p>
                                <a href="shop.html">Discover Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="banner_area bottom">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="{{ asset('frontend/img/bg/banner31.jpg') }}" alt="#"></a>
                            <div class="banner_content">
                                <h1># For Men</h1>
                                <p>Big Sale Off Final Sale Items. Caught in the moment!</p>
                                <a href="shop.html">Discover Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--banner area end-->

    <!--welcome about section css here-->
    <div class="welcome_about_section welcome_eight">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="welcome_about_inner">
                        <a href="#"><img src="{{ asset('frontend/img/logo/logo-2.png') }}" alt=""></a>
                        <p>Eget scelerisque, mollis blandit et risus mauris phasellus ac. Felis amet dui metus purus
                            mauris a, commodo amet
                            phasellus id erat nec, pellentesque a, dictum orci porttitor et. Quis ac fames est ut, proin
                            adipiscing in morbi elementum amet ligula. Habitant pellentesque laoreet lacus quisque
                            consequat tincidunt diam vivamus sapien.</p>
                        <p class="author">Silvester <span>/ CEO</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--welcome about section css end-->

    <!--product section area start-->
    <section class="product_section womens_product product_section_eight">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Our Products</h2>
                        <p>Contemporary, minimal and modern designs embody the Lavish Alice handwriting</p>
                    </div>
                </div>
            </div>
            <div class="product_area">
                <div class="row">
                    <div class="col-12">
                        <div class="product_tab_button">
                            <ul class="nav" role="tablist">
                                @foreach ($categories as $key=>$item)
                                <li>
                                    <a class="" data-bs-toggle="tab" href="#{{ $key }}" role="tab"
                                        aria-controls="clothing" aria-selected="true">{{ $item->title }}</a>
                                </li>
                                @endforeach
                                
                                {{-- <li>
                                    <a data-bs-toggle="tab" href="#handbag" role="tab" aria-controls="handbag"
                                        aria-selected="false">Women’s</a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#shoes" role="tab" aria-controls="shoes"
                                        aria-selected="false">Kid's</a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#accessories" role="tab" aria-controls="accessories"
                                        aria-selected="false">Shoes</a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    {{-- @foreach ($categories as $key=>$item)
                        
                    @endforeach --}}
                    <div class="tab-pane fade show active" id="{{ $key }}" role="tabpanel">
                        <div class="product_container">
                            <div class="row product_rows_column4">
                                @foreach ($products as $item)
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('product_detail', $item->id) }}"><img
                                                        src="{{ asset('images/product_images/' . $item->product_thumbnail) }}"
                                                        alt=""></a>
                                                <a class="secondary_img"
                                                    href="{{ route('product_detail', $item->id) }}"><img
                                                        src="{{ asset('images/product_images/' . $item->product_thumbnail) }}"
                                                        alt=""></a>
                                                <div class="product_action">
                                                    <div class="hover_action">
                                                        <a href="#"><i class="fa fa-plus"></i></a>
                                                        <div class="action_button">
                                                            <ul>
                                                                <li><a title="add to cart" href="cart.html"><i
                                                                            class="fa fa-shopping-basket"
                                                                            aria-hidden="true"></i></a></li>
                                                                <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                            class="fa fa-heart-o"
                                                                            aria-hidden="true"></i></a>
                                                                </li>

                                                                <li><a href="compare.html" title="Add to Compare"><i
                                                                            class="fa fa-sliders"
                                                                            aria-hidden="true"></i></a>
                                                                </li>
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
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product1.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product2.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>
                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders" aria-hidden="true"></i></a>
                                                            </li>
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
                                            <h3><a href="product-details.html">Marshall Portable Bluetooth</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product4.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product3.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>
                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders" aria-hidden="true"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    title="quick_view">+ quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <h3><a href="product-details.html">Koss KPH7 Portable</a></h3>
                                            <span class="current_price">£60.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product6.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product5.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders" aria-hidden="true"></i></a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    title="quick_view">+ quick view</a>
                                            </div>

                                        </div>
                                        <div class="product_content">
                                            <h3><a href="product-details.html">Beats Solo2 Solo 2</a></h3>
                                            <span class="current_price">£60.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product7.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product8.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>
                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders" aria-hidden="true"></i></a>
                                                            </li>
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
                                            <h3><a href="product-details.html">Beats EP Wired</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product10.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product9.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders" aria-hidden="true"></i></a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    title="quick_view">+ quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <h3><a href="product-details.html">Bose SoundLink Bluetooth</a></h3>
                                            <span class="current_price">£60.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product10.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product11.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders" aria-hidden="true"></i></a>
                                                            </li>

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
                                            <h3><a href="product-details.html">Apple iPhone SE 16GB</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product13.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product14.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders" aria-hidden="true"></i></a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    title="quick_view">+ quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <h3><a href="product-details.html">JBL Flip 3 Portable</a></h3>
                                            <span class="current_price">£60.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product15.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product16.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders" aria-hidden="true"></i></a>
                                                            </li>

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
                                            <h3><a href="product-details.html">Beats Solo Wireless</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product18.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product17.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders" aria-hidden="true"></i></a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    title="quick_view">+ quick view</a>
                                            </div>
                                            <div class="label_product">
                                                <span>new</span>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <h3><a href="product-details.html">Apple iPad with Retina</a></h3>
                                            <span class="current_price">£60.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product19.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product20.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders" aria-hidden="true"></i></a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    title="quick_view">+ quick view</a>
                                            </div>

                                            <div class="double_base">
                                                <div class="product_sale">
                                                    <span>-7%</span>
                                                </div>
                                                <div class="label_product">
                                                    <span>new</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <h3><a href="product-details.html">Marshall Portable Bluetooth</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product15.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product16.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders" aria-hidden="true"></i></a>
                                                            </li>

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
                                            <h3><a href="product-details.html">Beats EP Wired</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product17.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product18.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders" aria-hidden="true"></i></a>
                                                            </li>

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
                                            <h3><a href="product-details.html">Beats EP Wired</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product19.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product20.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders" aria-hidden="true"></i></a>
                                                            </li>

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
                                            <h3><a href="product-details.html">Beats EP Wired</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product21.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product22.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders" aria-hidden="true"></i></a>
                                                            </li>

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
                                            <h3><a href="product-details.html">Beats EP Wired</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product4.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product5.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders" aria-hidden="true"></i></a>
                                                            </li>

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
                                            <h3><a href="product-details.html">Beats EP Wired</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="handbag" role="tabpanel">
                        <div class="product_container">
                            <div class="row product_rows_column4">
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product20.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product19.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders" aria-hidden="true"></i></a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    title="quick_view">+ quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <h3><a href="product-details.html">Marshall Portable Bluetooth</a></h3>
                                            <span class="current_price">£60.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product19.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product18.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders" aria-hidden="true"></i></a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    title="quick_view">+ quick view</a>
                                            </div>
                                            <div class="label_product">
                                                <span>new</span>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <h3><a href="product-details.html">Koss KPH7 Portable</a></h3>
                                            <span class="current_price">£60.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product17.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product16.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders" aria-hidden="true"></i></a>
                                                            </li>

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
                                            <h3><a href="product-details.html">Beats Solo2 Solo 2</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product15.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product14.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders" aria-hidden="true"></i></a>
                                                            </li>

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
                                            <h3><a href="product-details.html">Beats EP Wired</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product13.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product12.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders" aria-hidden="true"></i></a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    title="quick_view">+ quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <h3><a href="product-details.html">Bose SoundLink Bluetooth</a></h3>
                                            <span class="current_price">£60.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product11.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product10.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders" aria-hidden="true"></i></a>
                                                            </li>

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
                                            <h3><a href="product-details.html">Apple iPhone SE 16GB</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product9.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product18.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders" aria-hidden="true"></i></a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    title="quick_view">+ quick view</a>
                                            </div>
                                            <div class="label_product">
                                                <span>new</span>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <h3><a href="product-details.html">JBL Flip 3 Portable</a></h3>
                                            <span class="current_price">£60.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product7.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product6.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders" aria-hidden="true"></i></a>
                                                            </li>

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
                                            <h3><a href="product-details.html">Beats Solo Wireless</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product5.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product4.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a>
                                                            </li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    title="quick_view">+ quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <h3><a href="product-details.html">Apple iPad with Retina</a></h3>
                                            <span class="current_price">£60.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product3.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product2.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a>
                                                            </li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

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
                                            <h3><a href="product-details.html">Marshall Portable Bluetooth</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product7.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product8.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

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
                                            <h3><a href="product-details.html">Marshall Portable Bluetooth</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product9.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product10.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

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
                                            <h3><a href="product-details.html">Marshall Portable Bluetooth</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product11.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product12.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

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
                                            <h3><a href="product-details.html">Marshall Portable Bluetooth</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product11.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product12.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

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
                                            <h3><a href="product-details.html">Marshall Portable Bluetooth</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product18.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product19.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

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
                                            <h3><a href="product-details.html">Marshall Portable Bluetooth</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="shoes" role="tabpanel">
                        <div class="product_container">
                            <div class="row product_rows_column4">
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product10.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product11.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    title="quick_view">+ quick view</a>
                                            </div>
                                            <div class="label_product">
                                                <span>new</span>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <h3><a href="product-details.html">Marshall Portable Bluetooth</a></h3>
                                            <span class="current_price">£60.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product11.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product12.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    title="quick_view">+ quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <h3><a href="product-details.html">Koss KPH7 Portable</a></h3>
                                            <span class="current_price">£60.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product13.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product9.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

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
                                            <h3><a href="product-details.html">Beats Solo2 Solo 2</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product8.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product7.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    title="quick_view">+ quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <h3><a href="product-details.html">Beats EP Wired</a></h3>
                                            <span class="current_price">£60.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product12.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product13.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

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
                                            <h3><a href="product-details.html">Bose SoundLink Bluetooth</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product10.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product11.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    title="quick_view">+ quick view</a>
                                            </div>
                                            <div class="double_base">
                                                <div class="product_sale">
                                                    <span>-7%</span>
                                                </div>
                                                <div class="label_product">
                                                    <span>new</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <h3><a href="product-details.html">Apple iPhone SE 16GB</a></h3>
                                            <span class="current_price">£60.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product13.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product14.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    title="quick_view">+ quick view</a>
                                            </div>
                                            <div class="label_product">
                                                <span>new</span>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <h3><a href="product-details.html">JBL Flip 3 Portable</a></h3>
                                            <span class="current_price">£60.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product15.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product16.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

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
                                            <h3><a href="product-details.html">Beats Solo Wireless</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product18.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product17.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    title="quick_view">+ quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <h3><a href="product-details.html">Apple iPad with Retina</a></h3>
                                            <span class="current_price">£60.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product19.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product20.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

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
                                            <h3><a href="product-details.html">Marshall Portable Bluetooth</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product19.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product20.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

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
                                            <h3><a href="product-details.html">Marshall Portable Bluetooth</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product4.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product5.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

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
                                            <h3><a href="product-details.html">Marshall Portable Bluetooth</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product14.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product15.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

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
                                            <h3><a href="product-details.html">Marshall Portable Bluetooth</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product12.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product13.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

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
                                            <h3><a href="product-details.html">Marshall Portable Bluetooth</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product10.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product11.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

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
                                            <h3><a href="product-details.html">Marshall Portable Bluetooth</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="accessories" role="tabpanel">
                        <div class="product_container">
                            <div class="row product_rows_column4">
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product1.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product2.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

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
                                            <h3><a href="product-details.html">Marshall Portable Bluetooth</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product4.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product3.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

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
                                            <h3><a href="product-details.html">Koss KPH7 Portable</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product6.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product5.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    title="quick_view">+ quick view</a>
                                            </div>
                                            <div class="label_product">
                                                <span>new</span>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <h3><a href="product-details.html">Beats Solo2 Solo 2</a></h3>
                                            <span class="current_price">£60.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product7.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product8.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    title="quick_view">+ quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <h3><a href="product-details.html">Beats EP Wired</a></h3>
                                            <span class="current_price">£60.00</span>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product10.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product9.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    title="quick_view">+ quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <h3><a href="product-details.html">Bose SoundLink Bluetooth</a></h3>
                                            <span class="current_price">£60.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product10.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product11.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    title="quick_view">+ quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <h3><a href="product-details.html">Apple iPhone SE 16GB</a></h3>
                                            <span class="current_price">£60.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product13.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product14.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    title="quick_view">+ quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <h3><a href="product-details.html">JBL Flip 3 Portable</a></h3>
                                            <span class="current_price">£60.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product15.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product16.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

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
                                            <h3><a href="product-details.html">Beats Solo Wireless</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product18.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product17.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    title="quick_view">+ quick view</a>
                                            </div>
                                            <div class="label_product">
                                                <span>new</span>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <h3><a href="product-details.html">Apple iPad with Retina</a></h3>
                                            <span class="current_price">£60.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product19.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product20.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

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
                                            <h3><a href="product-details.html">Marshall Portable Bluetooth</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product17.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product18.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

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
                                            <h3><a href="product-details.html">Marshall Portable Bluetooth</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product15.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product16.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

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
                                            <h3><a href="product-details.html">Marshall Portable Bluetooth</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product13.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product14.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

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
                                            <h3><a href="product-details.html">Marshall Portable Bluetooth</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product11.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product12.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

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
                                            <h3><a href="product-details.html">Marshall Portable Bluetooth</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product9.jpg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('frontend/img/product/product10.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                    <a href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>

                                                            <li><a title="add to cart" href="cart.html"><i
                                                                        class="fa fa-shopping-basket"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i
                                                                        class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>

                                                            <li><a href="compare.html" title="Add to Compare"><i
                                                                        class="fa fa-sliders"
                                                                        aria-hidden="true"></i></a></li>

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
                                            <h3><a href="product-details.html">Marshall Portable Bluetooth</a></h3>
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--product section area end-->

    <!--Instagram area start-->
    <section class="instagram_area instagram_eight">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Follow us On Instagram</h2>
                        <p>Contemporary, minimal and modern designs embody the Lavish Alice handwriting</p>
                    </div>
                </div>
            </div>
            <div class="instagram_home_block">
                <div class="row">
                    <div class="instagram_wrapper instagram_column5 owl-carousel">
                        <div class="col-lg-3">
                            <div class="single_instagram">
                                <a href="#"><img src="{{ asset('frontend/img/about/intagram.png') }}"
                                        alt=""></a>
                                <div class="instagram_icone">
                                    <a class="instagram_pupop"
                                        href="{{ asset('frontend/img/about/intagram.png') }}"><i
                                            class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="single_instagram">
                                <a href="#"><img src="{{ asset('frontend/img/about/intagram1.png') }}"
                                        alt=""></a>
                                <div class="instagram_icone">
                                    <a class="instagram_pupop"
                                        href="{{ asset('frontend/img/about/intagram1.png') }}"><i
                                            class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="single_instagram">
                                <a href="#"><img src="{{ asset('frontend/img/about/intagram2.png') }}"
                                        alt=""></a>
                                <div class="instagram_icone">
                                    <a class="instagram_pupop"
                                        href="{{ asset('frontend/img/about/intagram2.png') }}"><i
                                            class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="single_instagram">
                                <a href="#"><img src="{{ asset('frontend/img/about/intagram3(1).png') }}"
                                        alt=""></a>
                                <div class="instagram_icone">
                                    <a class="instagram_pupop"
                                        href="{{ asset('frontend/img/about/intagram3(1).png') }}"><i
                                            class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="single_instagram">
                                <a href="#"><img src="{{ asset('frontend/img/about/intagram4(1).png') }}"
                                        alt=""></a>
                                <div class="instagram_icone">
                                    <a class="instagram_pupop"
                                        href="{{ asset('frontend/img/about/intagram4(1).png') }}"><i
                                            class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="single_instagram">
                                <a href="#"><img src="{{ asset('frontend/img/about/intagram1.png') }}"
                                        alt=""></a>
                                <div class="instagram_icone">
                                    <a class="instagram_pupop"
                                        href="{{ asset('frontend/img/about/intagram1.png') }}"><i
                                            class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="text_follow">
                            <a href="#">#Follow us on Instagram</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Instagram area end-->
@endsection
