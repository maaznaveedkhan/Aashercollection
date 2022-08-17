@extends('user.layouts.appuser')
@section('content')
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
               <h6 class="mb-4">Order Detail</h6>
               {{-- <div class="row">
                  <div class="col-md-6">
                     <h6>Order No</h6>
                  </div>
                  <div class="col-md-6">
                     <h6 class="float-right">{{$orders['order_number']}}</h6>
                  </div>
               </div> --}}
               <div class="table-responsive">
                  <table class="table borderless">
                     <thead>
                        <tr>
                              <th scope="col">Order No</th>
                              <th>{{$orders['order_number']}}</th>
                        </tr>
                     </thead>
                  </table>
               </div>
               <div class="table-responsive">
                  <table class="table ">
                     <thead>
                        <tr>
                           <th scope="col">Product Name</th>
                           <th scope="col">Product Image</th>
                           <th>Quantity</th>
                           <th>Price</th>
                           <th>Date</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($products as $product)
                        <tr>
                           <td>
                              <a href="{{route('product_detail',$product->id)}}" style="text-decoration:none;"><p>{{ $product->name }}</p></a>
                           </td>
                           <td><a href=""><img src="{{asset('images/product_images/'.$product['product_thumbnail']) }}" width="100" height="100"></a></td>
                           @foreach($details as $detail)
                                 @if($product->id == $detail->product_id) 
                                    <td><p>{{ $detail->quantity }} buc</p></td>
                                 @endif
                           @endforeach 
                           <td>
                              <p>Rs. {{$product->price}} </p>
                           </td>
                           <td>
                              <p>{{$orders['created_at']}}</p>
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
@endsection