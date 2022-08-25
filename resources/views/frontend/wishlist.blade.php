@extends('frontend.layouts.app')
@section('content')
@php
    use App\Models\Product;
@endphp
<!--breadcrumbs area start-->
<div class="breadcrumbs_area other_bread">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li>/</li>
                        <li>wishlist</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--wishlist area start -->
<div class="wishlist_area">
    <div class="container">
        <form action="#">
            <div class="row">
                <div class="col-12">
                    <div class="table_desc wishlist">
                        <div class="cart_page table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product_remove">Delete</th>
                                        <th class="product_thumb">Image</th>
                                        <th class="product_name">Product</th>
                                        <th class="product-price">Price</th>
                                        {{-- <th class="product_quantity">Stock Status</th> --}}
                                        <th class="product_total">Add To Cart</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($wishlists as $key => $item)
                                        @php
                                            $item_id = $item->product_id;
                                            $products = Product::where('id',$item_id)->get();
                                        @endphp
                                       {{-- {{ dd($products)}}  --}}
                                         @foreach ($products as $element)
                                            {{-- {{ dd($element)}}  --}}
                                             <tr>
                                                <td class="product_remove"><a href="{{ route('remove_from_wishlist',$element['id']) }}">X</a></td>
                                                <td class="product_thumb">
                                                    <a href="#"><img height="50" width="50" src="{{ asset('images/product_images/'.$element->product_thumbnail) }}" alt=""></a>
                                                </td>
                                                <td class="product_name"><a href="#">{{ $element->name }}</a></td>
                                                <td class="product-price">Rs. {{ $element->discounted_price }}</td>
                                                <td class="product_total"><a href="{{ route('add.to.cart',$element->id) }}">Add To Cart</a></td>
                                            </tr> 
                                        @endforeach
                                    @endforeach
                                    

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </form>
        <div class="row">
            <div class="col-12">
                <div class="wishlist_share">
                    <h4>Share on:</h4>
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
<!--wishlist area end -->
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
