<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Aasher Collection</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/img/logo_latest.jpg') }}">

    <!-- CSS
    ========================= -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    @php
    use App\Models\Category;
        $categories = Category::all();
    @endphp
    <style>
        /* body {
        font-family: Arial, sans-serif;
        background: url(http://www.shukatsu-note.com/wp-content/uploads/2014/12/computer-564136_1280.jpg) no-repeat;
        background-size: cover;
        height: 100vh;
        } */

        /* h1 {
        text-align: center;
        font-family: Tahoma, Arial, sans-serif;
        color: #06D85F;
        margin: 80px 0;
        } */

        /* .box {
        width: 40%;
        margin: 0 auto;
        background: rgba(255,255,255,0.2);
        padding: 35px;
        border: 2px solid #fff;
        border-radius: 20px/50px;
        background-clip: padding-box;
        text-align: center;
        } */

        .button {
        font-size: 1em;
        padding: 10px;
        color: #fff;
        border: 2px solid #06D85F;
        border-radius: 20px/50px;
        text-decoration: none;
        cursor: pointer;
        transition: all 0.3s ease-out;
        }
        .button:hover {
        background: #06D85F;
        }

        .overlay {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        /* background: rgba(0, 0, 0, 0.7); */
        /* transition: opacity 500ms; */
        visibility: hidden;
        opacity: 0;
        }
        .overlay:target {
        visibility: visible;
        opacity: 1;
        }

        .popup {
        margin: 70px auto;
        padding: 20px;
        background: #fff;
        border-radius: 5px;
        width: 30%;
        position: relative;
        border: 1px solid gray;
        transition: all 5s ease-in-out;
        z-index: 60;
        }

        .popup h2 {
        margin-top: 0;
        color: #333;
        font-family: Tahoma, Arial, sans-serif;
        }
        .popup .close {
        position: absolute;
        top: 20px;
        right: 30px;
        transition: all 200ms;
        font-size: 30px;
        font-weight: bold;
        text-decoration: none;
        color: #333;
        }
        .popup .close:hover {
        color: #06D85F;
        }
        .popup .content {
        max-height: 30%;
        overflow: auto;
        }

        @media screen and (max-width: 700px){
        .box{
            width: 70%;
        }
        .popup{
            width: 70%;
        }
        }
    </style>
</head>

<body>
    <!-- Main Wrapper Start -->
    <!--Offcanvas menu area start-->
    <div class="off_canvars_overlay">

    </div>
    <div class="offcanvas_menu offcanvas_eight">
        <div class="canvas_open">
            <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
        </div>
        <div class="offcanvas_menu_wrapper">
            <div class="canvas_close">
                <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
            </div>
            <div class="welcome_text">
                <ul>
                    <li><span>Free Delivery:</span> Take advantage of our time to save event</li>
                    <li><span>Free Returns *</span> Satisfaction guaranteed</li>
                </ul>
            </div>

            <div class="top_right">

                <ul>
                    <li class="top_links"><a href="#">My Account <i class="ion-chevron-down"></i></a>

                        <ul class="dropdown_links">


                            <li><a href="{{ route('home') }}">My Account </a></li>

                            <li><a class="" href="{{ route('logout') }}"

                                onclick="event.preventDefault();

                                    document.getElementById('logout-form').submit();">

                                {{ __('Logout') }}

                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"

                                    class="d-none">

                                    @csrf

                                </form>
                            </li>
                        </ul>
                    </li>
                    @auth
                    <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
                    @endauth

                    <li class="language"><a href="#"><img src="{{ asset('frontend/img/logo/language.png') }}"

                                alt="">

                            English <i class="ion-chevron-down"></i></a>

                        <ul class="dropdown_language">

                            <li><a href="#"><img src="{{ asset('frontend/img/logo/cigar.jpg') }}" alt="">

                                    French</a></li>

                            <li><a href="#"><img src="{{ asset('frontend/img/logo/language2.png') }}"

                                        alt="">German</a>

                            </li>

                        </ul>

                    </li>

                    <li class="currency"><a href="#">USD <i class="ion-chevron-down"></i></a>

                        <ul class="dropdown_currency">

                            <li><a href="#">EUR</a></li>

                            <li><a href="#">BRL</a></li>

                        </ul>

                    </li>

                </ul>

            </div>

            <div class="search_bar">

                <form action="#">

                    <select class="select_option" name="select" onchange="window.location.href=this.options[this.selectedIndex].value;">

                        <option selected value="1">All Categories</option>

                        @foreach ($categories as $item)

                            <option value="{{ route('popular_categories',$item->id) }}">{{ $item->title }}</option>

                        @endforeach

                    </select>

                    <input name="product" id="product" placeholder="Search entire store here..." type="text">

                    <button type="submit" id="search_button"><i class="ion-ios-search-strong"></i></button>

                </form>

                <div id="product_list"></div>

            </div>
            

            <div class="cart_area">
                <div class="middel_links">
                    <ul>
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li>/</li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    </ul>

                </div>
                <div class="cart_link">
                    <a href="#"><i
                        class="fa fa-shopping-basket"></i>{{ count((array) session('cart')) }}item(s)</a>
                    <!--mini cart-->
                        <div class="mini_cart">
                            @if (! Session :: has ('cart') || empty (Session :: get ('cart')))

                            @else
                                @if (session('cart'))
                                    @foreach (session('cart') as $id => $details)
                                        <div class="cart_item top">
                                            <div class="cart_img">
                                                <a href="#"><img src="{{ asset('images/product_images/'.$details['image'])  }}"
                                                        alt=""></a>
                                            </div>
                                            <div class="cart_info">
                                                <a href="#">{{ $details['name'] }}</a>

                                                <span>{{ $details['quantity'] }}x {{ $details['price'] }}</span>

                                            </div>
                                            <div class="cart_remove">

                                                {{-- <tr  data-id="{{ $id }}">
                                                    <td class="actions" data-th="">
                                                        <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button>
                                                    </td>
                                                </tr> --}}
                                         
                                                {{-- <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button> --}}
                                                <a href="{{ url('delete',$id) }}"><i class="ion-android-close"></i></a>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                                    {{-- <div class="cart_item bottom">
                                        <div class="cart_img">
                                            <a href="#"><img src="{{ asset('frontend/img/s-product/product2.jpg') }}"
                                                    alt=""></a>
                                        </div>
                                        <div class="cart_info">
                                            <a href="#">Marshall Portable Bluetooth</a>
                                            <span> 1x $160.00</span>
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div> --}}
                                    <div class="cart__table">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    @php 
                                                    $sub_total = 0 
                                                    // $shipping = 0
                                                    @endphp
                                                    @foreach ((array) session('cart') as $id => $details)
                                                        @php $sub_total += $details['price'] * $details['quantity'] @endphp
                                                    @endforeach
                                                    <td class="text-left">Sub-Total :</td>
                                                    <td class="text-right">{{ $sub_total }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="cart_button view_cart">
                                        <a href="{{ route('cart') }}">View Cart</a>
                                    </div>
                                    <div class="cart_button checkout">
                                        <a href="{{ route('checkout') }}">Checkout</a>
                                    </div>
                            @endif
                        </div>
                    <!--mini cart end-->
                </div>
            </div>
            <div id="menu" class="text-left ">
                <ul class="offcanvas_main_menu">
                    <li class="menu-item-has-children">
                        <a href="{{ url('/') }}">Home</a>

                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Shop</a>
                        <ul class="sub-menu">
                            <li class="menu-item-has-children">
                                <a href="#">Popular Categories</a>
                                <ul class="sub-menu">
                                    @foreach ($categories as $item)
                                    <li><a href="{{ route('popular_categories',$item->id) }}">{{ $item->title }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Product Types</a>
                                <ul class="sub-menu">
                                    @foreach ($categories as $item)
                                    <li><a href="{{ route('popular_categories',$item->id) }}">{{ $item->title }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </li>
                   
                    <li class="menu-item-has-children">
                        <a href="#">pages </a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('about_us') }}">About Us</a></li>
                            {{-- <li><a href="{{ route('login') }}">services</a></li> --}}
                            <li><a href="{{ route('faq') }}">Frequently Questions</a></li>
                            <li><a href="{{ route('contact_us') }}">contact</a></li>
                            <li><a href="{{ route('login') }}">login</a></li>
                            <li><a href="{{ route('privacy_policy') }}">privacy policy</a></li>
                            <li><a href="{{ route('terms') }}">terms & conditions</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ route('home') }}">my account</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ route('about_us') }}">About Us</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ route('contact_us') }}"> Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="offcanvas_footer">
                <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
                <ul>
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--Offcanvas menu area end-->

    <!--header area start-->
    <header class="header_area header_eight">
        <!--header top start-->
        <div class="header_top">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12">
                        <div class="welcome_text">
                            <ul>
                                <li><span>Free Delivery:</span> Take advantage of our time to save event</li>
                                <li><span>Free Returns *</span> Satisfaction guaranteed</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="top_right text-right">
                            <ul>

                                @auth
                                    <li class="top_links"><a href="#">My Account <i
                                                class="ion-chevron-down"></i></a>
                                        <ul class="dropdown_links">
                                            <li><a href="{{ route('home') }}">My Account </a></li>
                                            <li><a class="" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
                                @else
                                    <li class=""><a href="{{ route('login') }}">Login</a></li>
                                @endauth
                            
                                

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header top start-->

        <!--header middel start-->
        <div class="header_middel">
            <div class="container-fluid">
                <div class="middel_inner">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="search_bar">
                                <form id="search_form" action="{{ route('search') }}" method="GET">
                                    <input name="product" id="product" placeholder="Search entire store here..." type="text">
                                    <button type="submit" id="search_button"><i class="ion-ios-search-strong"></i></button>
                                </form>
                                <div id="product_list"></div> 
                            </div>
                            
                        </div>
                        <div class="col-lg-6">
                            <div class="logo">
                                <a href="{{ route('/') }}"><img height="200" width="250" src="{{ asset('frontend/img/logo_latest.jpg') }}"
                                        alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="cart_area">

                                <div class="cart_link">
                                    <a href="#"><i
                                            class="fa fa-shopping-basket"></i>{{ count((array) session('cart')) }}
                                        item(s)</a>
                                    <!--mini cart-->

                                    <div class="mini_cart">
                                        @if (! Session :: has ('cart') || empty (Session :: get ('cart')))
                                            <p>Not Products Found...</p>
                                        @else
                                            @if (session('cart'))
                                                @foreach (session('cart') as $id => $details)
                                                    <div class="cart_item top">
                                                        <div class="cart_img">
                                                            <a href="#"><img src="{{ asset('images/product_images/'.$details['image'])  }}"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="cart_info">
                                                            <a href="{{ url('product_detail') }}">{{ $details['name'] }}</a>
                                                            <span>{{ $details['quantity'] }}x Rs.{{ $details['price'] }}</span>
                                                        </div>
                                                        <div class="cart_remove">
                                                            <a href="{{ url('delete',$id) }}"><i class="ion-android-close"></i></a>

                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        
                                        <div class="cart__table">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        @php $sub_total = 0 @endphp
                                                        @foreach ((array) session('cart') as $id => $details)
                                                            @php $sub_total += $details['price'] * $details['quantity'] @endphp
                                                        @endforeach
                                                        <td class="text-left">Sub-Total :</td>
                                                        <td class="text-right">{{ $sub_total }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                        <div class="cart_button view_cart">
                                            <a href="{{ route('cart') }}">View Cart</a>
                                        </div>
                                        <div class="cart_button checkout">
                                            <a href="{{ route('checkout') }}">Checkout</a>
                                        </div>
                                        @endif
                                        
                                    </div>
                                    <!--mini cart end-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="horizontal_menu horizontal_menu_eight">
                        <div class="left_menu">
                            <div class="main_menu">
                                <nav>
                                    <ul>
                                        <li class=""><a href="index.html">Home <i
                                                    class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu">
                                                <li><a href="index.html">Home 1</a></li>
                                                <li><a href="index-2.html">Home 2</a></li>
                                                <li><a href="index-3.html">Home 3</a></li>
                                                <li><a href="index-4.html">Home 4</a></li>
                                                <li><a href="index-5.html">Home 5</a></li>
                                                <li><a href="index-6.html">Home 6</a></li>
                                                <li><a href="index-7.html">Home 7</a></li>
                                                <li><a href="index-8.html">Home 8</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega_items"><a href="shop.html">shop <i
                                                    class="fa fa-angle-down"></i></a>
                                            <ul class="mega_menu">
                                                <li><a href="#">Shop Layouts</a>
                                                    <ul>
                                                        <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                        <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                                        <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                                        <li><a href="shop-right-sidebar-list.html"> Right Sidebar
                                                                list</a></li>
                                                        <li><a href="shop-list.html">List View</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">other Pages</a>
                                                    <ul>
                                                        <li><a href="portfolio.html">portfolio</a></li>
                                                        <li><a href="portfolio-details.html">portfolio details</a></li>
                                                        <li><a href="cart.html">cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="my-account.html">my account</a></li>


                                                    </ul>
                                                </li>
                                                <li><a href="#">Product Types</a>
                                                    <ul>
                                                        <li><a href="product-details.html">product details</a></li>
                                                        <li><a href="product-sidebar.html">product sidebar</a></li>
                                                        <li><a href="product-gallery.html">product gallery</a></li>
                                                        <li><a href="product-grouped.html">product grouped</a></li>
                                                        <li><a href="variable-product.html">product variable</a></li>

                                                    </ul>
                                                </li>
                                                <li><a href="#">collection</a>
                                                    <ul>
                                                        <li><a href="shop.html">Handbag</a></li>
                                                        <li><a href="shop.html">Accessories</a></li>
                                                        <li><a href="shop.html">Clothing</a></li>
                                                        <li><a href="shop.html">Shoes</a></li>
                                                        <li><a href="shop.html">Check Trousers</a></li>

                                                    </ul>
                                                </li>
                                                <li class="banner_menu"><a href="#"><img
                                                            src="{{ asset('frontend/img/bg/banner1.jpg') }}"
                                                            alt=""></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">blog <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="blog-details.html">blog details</a></li>
                                                <li><a href="blog-sidebar.html">blog Sidebar</a></li>
                                                <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="{{ route('about_us') }}">About Us</a></li>
                                                <li><a href="{{ route('faq') }}">Frequently Questions</a></li>
                                                <li><a href="{{ route('login') }}">login</a></li>
                                                <li><a href="{{ route('about_us') }}">my account</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="logo_container">
                            <a href="index.html"><img src="{{ asset('frontend/img/logo/logo.png') }}"
                                    alt=""></a>
                        </div>
                        <div class="right_menu">
                            <div class="main_menu">
                                <nav>
                                    <ul>
                                        <li><a href="#">Specials</a></li>
                                        <li><a href="#">Sneaker</a></li>
                                        <li><a href="{{ route('about_us') }}">About us</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header middel end-->
        <!--header bottom satrt-->
        <div class="header_bottom sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="main_menu_inner">
                            <div class="main_menu">
                                <nav>
                                    <ul>
                                        <li class=""><a href="{{ route('/') }}">Home </a></li>
                                        <li><a href="#">shop <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                @foreach ($categories as $item)
                                                    <li><a href="{{ route('popular_categories',$item->id) }}">{{ $item->title }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('about_us') }}">About us</a></li>
                                        <li><a href="{{ route('contact_us') }}">Contact Us</a></li>
                                        <li><a href="#">Information <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="{{ route('faq') }}">Frequently Questions</a></li>
                                                <li><a href="{{ route('privacy_policy') }}">privacy policy</a></li>
                                                <li><a href="{{ route('terms') }}">terms & conditions </a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('blogs') }}">Blogs </a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header bottom end-->
 
        {{-- <nav class="mobile-nav">
            <a href="{{ route('/') }}" class="bloc-icon">
                <i class="fas fa-home fa-2x"></i>
            </a>
            <a href="{{ route('cart') }}" class="bloc-icon">
                <i class="fas fa-shopping-basket fa-2x"></i>
            </a>
            <a href="{{ route('wishlist') }}" class="bloc-icon">
                <i class="fas fa-heart fa-2x"></i>
            </a>
            <a href="{{ route('home') }}" class="bloc-icon">
                <i class="far fa-user-circle fa-2x"></i>
            </a>
        </nav> --}}
        <nav class="mob_nav">
            <a href="#" class="mob_nav__link">
                <i class="fas fa-home"></i>
                <span class="nav__text">Home</span>
              </a>
            <a href="#" class="mob_nav__link">
                <i class="fas fa-shopping-basket"></i>
                <span class="nav__text">Cart</span>
            </a>
            <a href="#" class="mob_nav__link">
              <i class="fas fa-heart"></i>
              <span class="nav__text">Wishlist</span>
            </a>
            <a href="#" class="mob_nav__link nav__link--active">
                <i class="fas fa-user-circle "></i>
                <span class="nav__text">Profile</span>
              </a>
        </nav>
    </header>
    <!--header area end-->
    @yield('content')
    <!--footer area start-->
    <footer class="footer_widgets">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                        <div class="widgets_container">
                            <h3>Information</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="{{ route('about_us') }}">About Us</a></li>
                                    <li><a href="{{ route('privacy_policy') }}">Privacy Policy</a></li>
                                    <li><a href="{{ route('terms') }}">Terms & Conditions</a></li>
                                    <li><a href="{{ route('contact_us') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                        <div class="widgets_container">
                            <h3>Extras</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="{{ route('home') }}">My Account</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="widgets_container contact_us">
                            <h3>Contact Us</h3>
                            <div class="footer_contact">
                                <p>Address:Your address goes here.</p>
                                <p>Phone: <a href="tel:01234567890">01234567890</a> </p>
                                <p>Email: demo@example.com</p>
                                <ul>
                                    <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" title="google-plus"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" title="youtube"><i class="fa fa-youtube"></i></a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="widgets_container newsletter">
                            <h3>Join Our Newsletter Now</h3>
                            <div class="newleter-content">
                                <p>Exceptional quality. Ethical factories. Sign up to enjoy free U.S. shipping and
                                    returns
                                    on your first order.</p>
                                <div class="subscribe_form">
                                    <form id="mc-form" class="mc-form footer-newsletter">
                                        <input id="mc-email" type="email" autocomplete="off"
                                            placeholder="Enter you email address here..." />
                                        <button id="mc-submit">Subscribe !</button>
                                    </form>
                                    <!-- mailchimp-alerts Start -->
                                    <div class="mailchimp-alerts text-centre">
                                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                    </div><!-- mailchimp-alerts end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright_area">
                            <p> &copy; 2022 <strong> Aasher Collection </strong> </p>
                        </div>
                    </div>
                    {{-- <div class="col-lg-6 col-md-6">
                        <div class="footer_custom_links">
                            <ul>
                                <li><a href="#">Order History</a></li>
                                <li><a href="wishlist.html">Wish List</a></li>
                                <li><a href="#">Newsletter</a></li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </footer>
    <!--footer area end-->

    <!-- modal area start-->
    {{-- <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
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
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/product4.jpg"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/product6.jpg"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/product8.jpg"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/product2.jpg"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab5" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/product12.jpg"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li>
                                                <a class="nav-link active" data-bs-toggle="tab" href="#tab1"
                                                    role="tab" aria-controls="tab1" aria-selected="false"><img
                                                        src="assets/img/s-product/product3.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-bs-toggle="tab" href="#tab2"
                                                    role="tab" aria-controls="tab2" aria-selected="false"><img
                                                        src="assets/img/s-product/product.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link button_three" data-bs-toggle="tab" href="#tab3"
                                                    role="tab" aria-controls="tab3" aria-selected="false"><img
                                                        src="assets/img/s-product/product2.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-bs-toggle="tab" href="#tab4"
                                                    role="tab" aria-controls="tab4" aria-selected="false"><img
                                                        src="assets/img/s-product/product4.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-bs-toggle="tab" href="#tab5"
                                                    role="tab" aria-controls="tab5" aria-selected="false"><img
                                                        src="assets/img/s-product/product5.jpg" alt=""></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Handbag feugiat</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">$64.99</span>
                                        <span class="old_price">$78.99</span>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste
                                            laborum
                                            ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos
                                            qui
                                            nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae
                                        </p>
                                    </div>
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                            <h2>size</h2>
                                            <select class="select_option">
                                                <option selected value="1">s</option>
                                                <option value="1">m</option>
                                                <option value="1">l</option>
                                                <option value="1">xl</option>
                                                <option value="1">xxl</option>
                                            </select>
                                        </div>
                                        <div class="variants_color">
                                            <h2>color</h2>
                                            <select class="select_option">
                                                <option selected value="1">purple</option>
                                                <option value="1">violet</option>
                                                <option value="1">black</option>
                                                <option value="1">pink</option>
                                                <option value="1">orange</option>
                                            </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input min="0" max="100" step="2" value="1"
                                                    type="number">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="pinterest"><a href="#"><i
                                                        class="fa fa-pinterest"></i></a>
                                            </li>
                                            <li class="google-plus"><a href="#"><i
                                                        class="fa fa-google-plus"></i></a></li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a>
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
    </div> --}}
    <!-- modal area start-->


    <!-- JS
============================================ -->

    <!-- Plugins JS -->
    <script src="{{ asset('frontend/js/plugins.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#product').on('keyup',function() {
                alert ="ab";
                var query = $(this).val(); 
                $.ajax({
                   
                    url:"{{ route('search') }}",
              
                    type:"GET",
                   
                    data:{'product':query},
                   
                    success:function (data) {
                      
                        $('#product_list').html(data);
                    }
                })
                // end of ajax call
            });

            $(document).on('click', 'li', function(){
              
                var value = $(this).text();
                $('#product').val(value);
                $('#product_list').html("");
            });

        });
        
    </script>>
</body>

</html>
