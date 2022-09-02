@extends('frontend.layouts.app')
@section('content')
<style>
   input[type=text] {
    width: 100%;
    box-sizing: border-box;
    border: none;
    border-bottom: 1px solid #ccc;
    font-size: 16px;
    background-color: none;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    outline: none;
}
</style>
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">   
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="{{route('/')}}">home</a></li>
                        <li>compare</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>         
</div>
<!--breadcrumbs area end-->

<!-- main-content-wrap start -->
<div class="main-content-wrap compaer-page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <!-- Compare Table -->
                    <div class="compare-table table-responsive">
                        <table class="table mb-0">
                            <tbody>
                                <tr>
                                   <td></td>
                                    <td>
                                        <form id="search_form" action="{{ route('compare_search') }}" method="GET">
                                            <input type="hidden" name="search" placeholder="Search by list name">
                                        </form>
                                        {{-- <div id="compared_products2"></div>  --}}
                                    </td>
                                    <td>
                                        {{-- <div class="search-bar-container"> --}}
                                            <form id="search_form" action="{{ route('compare_search') }}" method="GET">
                                                <input name="product" id="product2" placeholder="Search entire store here..." type="text">
                                                {{-- <button type="submit" id="search_button"><i class="ion-ios-search-strong"></i></button> --}}
                                            </form>
                                        {{-- </div> --}}
                                        <div id="compared_products2" style=""></div> 
                                    </td>
                                    <td>
                                        {{-- <div class="search_bar"> --}}
                                            <form id="search_form3" action="{{ route('compare_search') }}" method="GET">
                                                <input name="product" id="product3" placeholder="Search entire store here..." type="text">
                                                {{-- <button type="submit" id="search_button"><i class="ion-ios-search-strong"></i></button> --}}
                                            </form>
                                        {{-- </div> --}}
                                        <div id="compared_products3"></div> 
                                    </td>
                                </tr>
                                <tr>
                                    <td class="first-column">Product</td>
                                    <td class="product-image-title">
                                        <a href="#" class="image"><img src="{{ asset('images/product_images/'.$product['product_thumbnail']) }}" alt="Compare Product"></a>
                                        <a href="#" class="category">Furniture</a>
                                        <a href="#" class="title">{{ $product['name'] }}</a>
                                    </td>
                                    <td class="product-image-title">
                                        <a href="#" class="image" id="product_thumbnail2"></a>
                                        <a href="#" id="category2" class="category"></a>
                                        <a href="#" id="name2" class="title"></a>
                                    </td>
                                    <td class="product-image-title">
                                        <a href="#" class="image" id="product_thumbnail3"></a>
                                        <a href="#" id="category2" class="category"></a>
                                        <a href="#" id="name3" class="title"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="first-column">Description</td>
                                    <td class="pro-desc">
                                        <p>{{ $product['short_description'] }}</p>
                                    </td>
                                    <td class="pro-desc">
                                        <p id="short_description2"></p>
                                    </td>
                                    <td class="pro-desc">
                                        <p id="short_description3"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="first-column">Price</td>
                                    <td class="pro-price">Rs. {{ $product['discounted_price'] }}</td>
                                    <td class="pro-price" id="discounted_price2"></td>
                                    <td class="pro-price" id="discounted_price3"></td>
                                </tr>
                                <tr>
                                    <td class="first-column">Color</td>
                                    <td class="pro-color">Black</td>
                                    <td class="pro-color" id="color2"></td>
                                    <td class="pro-color" id="color3"></td>
                                </tr>
                                {{-- <tr>
                                    <td class="first-column">Stock</td>
                                    <td class="pro-stock">In Stock</td>
                                    <td class="pro-stock">In Stock</td>
                                    <td class="pro-stock">In Stock</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Add to cart</td>
                                    <td class="pro-addtocart"><a href="#" class="add-to-cart" tabindex="0"><span>ADD TO CART</span></a></td>
                                    <td class="pro-addtocart"><a href="#" class="add-to-cart" tabindex="0"><span>ADD TO CART</span></a></td>
                                    <td class="pro-addtocart"><a href="#" class="add-to-cart" tabindex="0"><span>ADD TO CART</span></a></td>
                                </tr> --}}
                                <tr>
                                    <td class="first-column">Delete</td>
                                    <td class="pro-remove"><button type="button" onClick="refreshPage()"><i class="fa fa-trash-o"></i></button></td>
                                    <td class="pro-remove"><button><i class="fa fa-trash-o"></i></button></td>
                                    <td class="pro-remove"><button><i class="fa fa-trash-o"></i></button></td>
                                </tr>
                                {{-- <tr>
                                    <td class="first-column">Rating</td>
                                    <td class="pro-ratting">
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                    </td>
                                    <td class="pro-ratting">
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                    </td>
                                    <td class="pro-ratting">
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                    </td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- main-content-wrap end -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#product2').on('keyup',function() {
            var query = $(this).val(); 
            $.ajax({
               
                url:"{{ route('compare_search') }}",
          
                type:"GET",
               
                data:{'product':query},
               
                success:function (data) {
                  
                    $('#compared_products2').html(data);
                    
                }
            })
            
            // end of ajax call
        });
            
        $(document).on('click', 'li', function(){
            // let value = query === "" ? "none" : "block";

            var value = $(this).text();
            $('#product2').val(value);
            $('#compared_products2').html("");
        });
        $(document).on('click','.search',function(e){
            var value = $(this).attr('pro_id');
            e.preventDefault();
            // alert('not working');
            // console.log(value);
            $.ajax({
               
               url:"{{ route('find_product') }}",
         
               type:"GET",
              
               data:{product_id: value},
        
               success:function (data) {

                $('#name2').append(data.name);
                $('#short_description2').append(data.short_description);
                $('#discounted_price2').append(data.discounted_price);
                $('#product_thumbnail2').append(`<img src="/images/product_images/${data.product_thumbnail}">`);
               }

           });
           
        });
    });
    function refreshPage(){
    window.location.reload();
        } 
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#product3').on('keyup',function() {
            var query = $(this).val(); 
            $.ajax({
               
                url:"{{ route('compare_search') }}",
          
                type:"GET",
               
                data:{'product':query},
               
                success:function (data) {
                  
                    $('#compared_products3').html(data);
                    
                }
            })
            
            // end of ajax call
        });
            
        $(document).on('click', 'li', function(){
            
            var value = $(this).text();
            $('#product3').val(value);
            $('#compared_products3').html("");
        });
        $(document).on('click','.submitBtn',function(e){
            var value = $(this).attr('pro_id');
            e.preventDefault();
            // alert('not working');
            // console.log(value);
            $.ajax({
               
               url:"{{ route('find_product') }}",
         
               type:"GET",
              
               data:{product_id: value},
        
               success:function (data) {
                $('#name3').append(data.name);
                $('#short_description3').append(data.short_description);
                $('#discounted_price3').append(data.discounted_price);
                $('#product_thumbnail3').append(`<img src="/images/product_images/${data.product_thumbnail}">`);
               }

           });
           
        });
    });
</script>


@endsection