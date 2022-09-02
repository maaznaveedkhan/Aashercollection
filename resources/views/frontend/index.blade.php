@extends('frontend.layouts.app')
@section('content')
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
    <!--banner area start-->
    <section class="banner_section banner_section_eight">
        <div class="container-fluid">
            <div class="row ">
                @foreach ($popular_categories as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="banner_area">
                        <div class="banner_thumb">
                            <a href="{{ route('popular_categories',$item->id) }}"><img src="{{ asset('images/category_images/'.$item->image) }}" alt="#"></a>
                            <div class="banner_content">
                               <h1>#{{ $item->title }}</h1>
                               <p>Sale 10% Off Almost Everything</p>
                                <a href="{{ route('popular_categories',$item->id) }}">Discover Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
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
                        <p>Eget scelerisque, mollis blandit et risus mauris phasellus ac. Felis amet dui metus purus mauris a, commodo amet 
                            phasellus id erat nec, pellentesque a, dictum orci porttitor et. Quis ac fames est ut, proin adipiscing in morbi elementum amet ligula. Habitant pellentesque laoreet lacus quisque consequat tincidunt diam vivamus sapien.</p>
                        <p class="author">Silvester  <span>/ CEO</span></p>   
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
                                <li >
                                    <a class="{{ $item->id == 1 ? 'active' : '' }}" href="#home{{ $item->id }}" aria-controls="home{{$item->id}}" role="tab" aria-selected="true" data-bs-toggle="tab">{{ $item->title }}</a>
                                    
                                </li>
                                @endforeach
                               
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    @foreach ($categories as $key=>$item)
                        <div role="tabpanel" class="tab-pane fade {{ $item->id == 1 ? 'active' : ''  }}" id="home{{ $item->id }}" class="show active">
                            <div class="product_container">
                                <div class="row product_rows_column4">
                                    @foreach ($item->products as $item)
                                        <div class="col-lg-3">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{ route('product_detail',$item->id) }}"><img src="{{ asset('images/product_images/'.$item->product_thumbnail) }}" alt=""></a>
                                                    <a class="secondary_img" href="{{ route('product_detail',$item->id) }}">
                                                        @php
                                                            $images = json_decode($item->product_images);
                                                        @endphp
                                                            <img class="img-fluid" src="{{ asset('images/product_images/'.$images[0]) }}" alt="">
                                                        {{-- {{ dd($images[1]) }} --}}
                                                    </a>
                                                    <div class="product_action">
                                                        <div class="hover_action">
                                                        <a  href="{{ route('product_detail',$item->id) }}"><i class="fa fa-plus"></i></a>
                                                        <div class="action_button">
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
                                </div>
                            </div>
                        </div>
                    @endforeach

                    @foreach ($categories as $key => $item)
                        @foreach ($item->products as $item)
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
                                                                <h2>{{ $item->name }}</h2>
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
                    @endforeach
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
                        @foreach ($instas as $item)
                        <div class="col-lg-3">
                            <div class="single_instagram">
                                <a href="#"><img src="{{ asset('images/insta_images/'.$item->image) }}" alt=""></a>
                                <div class="instagram_icone">
                                    <a class="instagram_pupop" href="{{ asset('images/insta_images/'.$item->image) }}"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
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

        $(".remove-from-cart").on('input',function (e) {
            e.preventDefault();
            var ele = $(this);
            if(confirm("Are you sure want to remove?")) {
                $.ajax({
                    url: '{{ route('remove.from.cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    });
    </script>
 
@endsection
