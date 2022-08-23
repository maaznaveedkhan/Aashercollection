@extends('admin.layouts.appadmin')
@section('content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
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
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h2 class="">Product Detail</h2>
                    {{-- <img class="img-fluid" src="{{ asset('images/product_images/' . $product['product_thumbnail']) }}"
                        height="10" width="150" alt="Image not Available!"> --}}
                    <div class="row">
                        <div class="col-lg-5 col-md-5">
                            <div class="product-details-tab">
                                <div id="img-1" class="zoomWrapper single-zoom">
                                    <a href="#">
                                        <img id="zoom1" height="250" width="250"
                                            src="{{ asset('images/product_images/' . $product['product_thumbnail']) }}"
                                            data-zoom-image="assets/img/product/product5.jpg" alt="big-1">
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="product_d_right">
                                <form action="#">
                                    <h1>{{ $product['name'] }}</h1>
                                    <div class="product_price">
                                        <span class="current_price">Rs.{{ $product['discounted_price'] }}
                                            <span class="text-danger"><del>Rs.{{ $product['price'] }}</del></span></span>
                                    </div>
                                    <div class="product_desc">
                                        <p>{!! $product['long_description'] !!} </p>
                                    </div>

                                    <div class="product_variant color">
                                        <h3>color</h3>
                                        <p>{{ $product['color'] }}</p>
                                    </div>
                                    <div class="product_variant size">
                                        <h3>size</h3>
                                        <p>{{ $product['size'] }}</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Form End -->
@endsection
<div class="container">

</div>
