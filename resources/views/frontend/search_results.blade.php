@extends('frontend.layouts.app')
@section('content')
<div class="shop_area shop_reverse">
    <div class="container">
        <div class="shop_inner_area">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                   <!--sidebar widget start-->
                    <div class="sidebar_widget">
                        <div class="widget_list widget_filter">
                            <h2>Filter by price</h2>
                            <form action="#"> 
                                <div id="slider-range"></div>   
                                <button type="submit">Filter</button>
                                <input type="text" name="text" id="amount" />   
                            </form> 
                        </div>
                        <div class="widget_list widget_categories">
                            <h2>Product categories</h2>
                            <ul>
                                @foreach ($categories as $item)
                                    <li>
                                        <a href="{{ route('popular_categories',$item->id) }}">{{ $item->title }} <span>{{ count($item->products) }}</span></a> 
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!--sidebar widget end-->
                </div>
                <div class="col-lg-9 col-md-12">
                    <!--shop wrapper start-->
                    <!--shop toolbar start-->
                    <div class="shop_title">
                        <h1>shop</h1>
                    </div>
                    <div class="shop_toolbar_wrapper">
                        <div class="shop_toolbar_btn">

                            <button data-role="grid_3" type="button" class="active btn-grid-3" data-bs-toggle="tooltip" title="3"></button>

                            <button data-role="grid_4" type="button"  class=" btn-grid-4" data-bs-toggle="tooltip" title="4"></button>

                            <button data-role="grid_5" type="button"  class="btn-grid-5" data-bs-toggle="tooltip" title="5"></button>

                            <button data-role="grid_list" type="button"  class="btn-list" data-bs-toggle="tooltip" title="List"></button>
                        </div>
                        <div class="page_amount">

                        </div>
                    </div>
                     <!--shop toolbar end-->
                    
                     <div class="row shop_wrapper">
                        @if($products->isNotEmpty())
                            @foreach ($products as $item)
                                <div class="col-lg-4 col-md-4 col-12 ">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{ route('product_detail',$item->id) }}"><img src="{{ asset('images/product_images/'.$item->product_thumbnail) }}" alt=""></a>
                                            <a class="secondary_img" href="{{ route('product_detail',$item->id) }}"><img src="{{ asset('images/product_images/'.$item->product_thumbnail) }}" alt=""></a>
                                            <div class="product_action">
                                                <div class="hover_action">
                                                <a  href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="action_button">
                                                        <ul>
                                                            <li><a title="add to cart" href="{{ route('add.to.cart',$item->id) }}"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                            <li><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                            <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                            </div>
                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick_view">+ quick view</a>
                                            </div>

                                            <div class="double_base">
                                                @if(empty($item->discount_in_percentage))
                                                    
                                                @else
                                                <div class="product_sale">
                                                    <span>-{{ $item->discount_in_percentage }}%</span>
                                                </div>
                                                @endif
                                                
                                                <div class="label_product">
                                                    <span>new</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_content grid_content">
                                            <h3><a href="{{ route('product_detail',$item->id) }}">{{ $item->name }}</a></h3>
                                            <span class="current_price">Rs. {{ $item->discounted_price }}</span>
                                            <span class="old_price">Rs. {{ $item->price }}</span>
                                        </div>
                                        <div class="product_content list_content">
                                            <h3><a href="{{ route('product_detail',$item->id) }}">{{ $item->name }}</a></h3>
                                            <div class="product_ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product_price">
                                                <span class="current_price">Rs. {{ $item->discounted_price }}</span>
                                                <span class="old_price">Rs. {{ $item->price }}</span>
                                            </div>
                                            <div class="product_desc">
                                                <p>{{ $item->short_description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach                            
                        @else
                            <h2>No Products Found!</h2>
                        @endif
                    </div>
                    <div class="d-flex justify-content-center">
                        <ul>
                            <li class="" style="">{!! $products->links() !!}</li>
                        </ul>
                    </div>
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>   
            
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $("#cat-id").change(function() {
        alert('button is working');
    var category_id = $("").attr('data-id');
    var sort = $(this).val();
    var url = route('product.ajax_sort', cat_id);
    var data = { sort: sort };
    console.log(url);
    $.ajax({
        url: url,
        method: 'GET',
        data: data,
        dataType: 'json',
        success: function(data) {
    
            $(".result-sort").html(data.result);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        }

    });
    });
</script>
@endsection