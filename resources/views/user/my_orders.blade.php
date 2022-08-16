@extends('user.layouts.appuser')
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
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">My Orders</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                {{-- <th scope="col">#</th> --}}
                                <th scope="col">Order No</th>
                                <th scope="col">Status</th>
                                <th scope="col">Total Products</th>
                                <th scope="col">Total Amount</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                       @php
                           use App\Models\Product;

                       @endphp
                            @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->order_number }}</td>
                                <td>{{ $order->status }}</td>
                                <td>{{ $order->item_count }}</td>
                                <td>{{ $order->total }}</td>
                                <td>
                                    
                                       
                                    @foreach($order->order_items as $orderitem)
                                        @php
                                        $product = Product::findOrFail($orderitem->product_id);
                                        @endphp
                                       {{$product->name}}
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{route('order_detail',$order->id)}}" class="button">View Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Form End -->
@endsection