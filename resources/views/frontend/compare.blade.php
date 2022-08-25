@extends('frontend.layouts.app')
@section('content')
<style>
    .compare_form{
        
    }
</style>
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">   
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">home</a></li>
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
                                        <form id="search_form" action="{{ route('compare_search') }}" method="GET" style="width: 2rem;">
                                            <input name="product" id="product1" placeholder="Search entire store here..." type="text">
                                            <button type="submit" id="search_button"><i class="ion-ios-search-strong"></i></button>
                                        </form>
                                        <div id="compared_products1"></div> 
                                    </td>
                                    <td>
                                        {{-- <div class="search_bar"> --}}
                                            <form id="search_form" action="{{ route('compare_search') }}" method="GET">
                                                <input name="product" id="product2" placeholder="Search entire store here..." type="text">
                                                <button type="submit" id="search_button"><i class="ion-ios-search-strong"></i></button>
                                            </form>
                                        {{-- </div> --}}
                                        <div id="compared_products2"></div> 
                                    </td>
                                    <td>
                                        {{-- <div class="search_bar"> --}}
                                            <form id="search_form" action="{{ route('compare_search') }}" method="GET">
                                                <input name="product" id="product3" placeholder="Search entire store here..." type="text">
                                                <button type="submit" id="search_button"><i class="ion-ios-search-strong"></i></button>
                                            </form>
                                        {{-- </div> --}}
                                        <div id="compared_products3"></div> 
                                    </td>
                                </tr>
                                <tr>
                                    <td class="first-column">Product</td>
                                    <td class="product-image-title">
                                        <a href="#" class="image"><img src="{{ asset('frontend/img/product/product4.jpg') }}" alt="Compare Product"></a>
                                        <a href="#" class="category">Furniture</a>
                                        <a href="#" class="title">Rinosin title</a>
                                    </td>
                                    <td class="product-image-title">
                                        <a href="#" class="image"><img src="{{ asset('frontend/img/product/product8.jpg') }}" alt="Compare Product"></a>
                                        <a href="#" class="category">Furniture</a>
                                        <a href="#" class="title">Macro title</a>
                                    </td>
                                    <td class="product-image-title">
                                        <a href="#" class="image"><img src="{{ asset('frontend/img/product/product9.jpg') }}" alt="Compare Product"></a>
                                        <a href="#" class="category">Furniture</a>
                                        <a href="#" class="title">Oakley title</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="first-column">Description</td>
                                    <td class="pro-desc">
                                        <p>Eye glasses are very important for thos whos have some difficult in their eye to see every hing clearly and perfectly</p>
                                    </td>
                                    <td class="pro-desc">
                                        <p>Eye glasses are very important for thos whos have some difficult in their eye to see every hing clearly and perfectly</p>
                                    </td>
                                    <td class="pro-desc">
                                        <p>Eye glasses are very important for thos whos have some difficult in their eye to see every hing clearly and perfectly</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="first-column">Price</td>
                                    <td class="pro-price">$295</td>
                                    <td class="pro-price">$275</td>
                                    <td class="pro-price">$395</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Color</td>
                                    <td class="pro-color">Black</td>
                                    <td class="pro-color">Black</td>
                                    <td class="pro-color">Black</td>
                                </tr>
                                <tr>
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
                                </tr>
                                <tr>
                                    <td class="first-column">Delete</td>
                                    <td class="pro-remove"><button><i class="fa fa-trash-o"></i></button></td>
                                    <td class="pro-remove"><button><i class="fa fa-trash-o"></i></button></td>
                                    <td class="pro-remove"><button><i class="fa fa-trash-o"></i></button></td>
                                </tr>
                                <tr>
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
                                </tr>
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
    $(document).ready(function(){
        $('#name').on('keyup',function () {
            var query = $(this).val();
            $.ajax({
                url:'{{ route('compare_search') }}',
                type:'GET',
                data:{'name':query},
                success:function (data) {
                    $('#product_list').html(data);
                }
            })
        });
            $("li").click(function(){
                alert("The paragraph was clicked.");
            });
        $(document).on('click', 'li', function(){
            var value = $(this).text();
            $('#name').val(value);
            $('#product_list').html("");
        });
    });
</script>   
<script type="text/javascript">
    $(document).ready(function () {
     
        $('#product1').on('keyup',function() {
            var query = $(this).val(); 
            $.ajax({
               
                url:"{{ route('compare_search') }}",
          
                type:"GET",
               
                data:{'product':query},
               
                success:function (data) {
                  
                    $('#compared_products1').html(data);
                }
            })
            // end of ajax call
        });

        
        $(document).on('click', 'li', function(){
          
            var value = $(this).text();
            $('#product1').val(value);
            $('#compared_products1').html("");
        });
    });
</script>
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
            $('#find_product').click(function(e){
            e.preventDefault();
            alert("This product was clicked.");
            });
        });

        

        $(document).on('click', 'li', function(){
          
            var value = $(this).text();
            $('#product2').val(value);
            $('#compared_products2').html("");
        });
        
    });
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

        $('#find_product').click(function(e){
            e.preventDefault();
            alert("This product was clicked.");
        });

        
    });
</script>

@endsection