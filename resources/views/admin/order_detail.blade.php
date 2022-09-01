@extends('admin.layouts.appadmin')
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
                <h3 class="text-center">{{ __('Order no.') }} {{$orders['order_number']}}</h3>
                <div class="row">
                    <div class="col-md-4">
                        <h5 class="">{{ __('User Details') }}</h5>
                         <div class="form-group">
                            <p><strong>{{ __('First Name') }}: </strong><em><strong>{{$orders['name']}} </strong></em></p>
                         </div>
                         <div class="form-group">
                            <p><strong>{{ __('Last Name') }}: </strong><em><strong>{{$orders['email']}}</strong></em></p>
                         </div>
                         <div class="form-group">
                            <p><strong>{{ __('Phone') }}: </strong><em><strong> {{$orders['phone']}}</strong></em></p>
                         </div>
                         <div class="form-group">
                            <p><strong>{{ __('Address') }}: </strong><em><strong> {{$orders['address']}}</strong></em></p>
                         </div>
                         <div class="form-group">
                            <p><strong>{{ __('City') }}: </strong><em><strong> {{$orders['city']}}</strong></em></p>
                         </div>
                         
                         {{-- <div class="form-group">
                
                            <p><strong>{{ __('Total') }}: </strong><em><strong> {{$orders['billing_total']}}</strong></em></p>
                         </div>
                         <div class="form-group">
                            <p><strong>Status: </strong><em><strong> {{ $orders['shipped'] === "1" ? __('Shipped') : __('Not shipped') }}</strong></em></p>
                         </div> --}}
                    </div>
                    <div class="col-md-12">
                        <h5 class="text-center mt-5">{{ __('Ordered products') }}</h5>
                         <table class="table mt-3">
                            <thead>
                               <tr>
                                  <th>{{ __('Product Name') }}</th>
                                  <th>{{ __('Image') }}</th>
                                  <th>{{ __('Price') }}</th>
                                  <th>{{ __('Quantity') }}</th>
                                  <th>{{ __('Date') }}</th>
                               </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                               <tr>
                                  <td>
                                    
                                     <a href="" style="color: black"><p>{{ $product->name }}</p></a>
                                  </td>
                                  <td><a href=""><img src="{{asset('images/product_images/'.$product['product_thumbnail']) }}" width="100" height="100"></a></td>
                                  <td>
                                    @if (!empty($product['disounted_price']))
                                       <p>Rs. {{$product['disounted_price']}} </p>
                                    @else
                                       <p>Rs. {{$product['price']}} </p>
                                    @endif
                                     
                                  </td>
                                 @foreach($details as $detail)
                                    @if($product->id == $detail->product_id) 
                                       <td><p>{{ $detail->quantity }} buc</p></td>
                                    @endif
                                    @php
                                       $attnam = $detail['attribute_name'];
                                       $attval = $detail['attribute_values']
                                    @endphp
                                    <td>{{ $detail['attribute_name'] }}</td>
                                    <td>{{ $detail['attribute_values'] }}</td>
                                 @endforeach 
                                  <td>
                                     <p>{{$orders['created_at']}}</p>
                                  </td>
                               </tr>
                            @endforeach
                            </tbody>
                         </table>
                         {{-- <div class="float-right m-4">
                            <a class="btn btn-info m-4" href="">{{ __('Back') }}</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
{{-- <div class="container">
    <h3 class="text-center">{{ __('Order no.') }} {{$orders['order_number']}}</h3>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4">
        <h5 class="my-5">{{ __('User Details') }}</h5>
         <div class="form-group">
            <p><strong>{{ __('First Name') }}: </strong><em><strong>{{$orders['name']}} </strong></em></p>
         </div>
         <div class="form-group">
            <p><strong>{{ __('Last Name') }}: </strong><em><strong>{{$orders['email']}}</strong></em></p>
         </div>
         <div class="form-group">
            <p><strong>{{ __('Phone') }}: </strong><em><strong> {{$orders['phone']}}</strong></em></p>
         </div>
         <div class="form-group">
            <p><strong>{{ __('Address') }}: </strong><em><strong> {{$orders['address']}}</strong></em></p>
         </div>
         <div class="form-group">
            <p><strong>{{ __('City') }}: </strong><em><strong> {{$orders['city']}}</strong></em></p>
         </div>
         
    </div>
    <div class="col-sm-8">
        <h5 class="text-center mt-5">{{ __('Ordered products') }}</h5>
         <table class="table mt-3">
            <thead>
               <tr>
                  <th>{{ __('Product Name') }}</th>
                  <th>{{ __('Image') }}</th>
                  <th>{{ __('Price') }}</th>
                  <th>{{ __('Quantity') }}</th>
                  <th>{{ __('Date') }}</th>
               </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
               <tr>
                  <td>
                     <a href="" style="text-decoration:none;"><p>{{ $product->name }}</p></a>
                  </td>
                  <td><a href=""><img src="{{asset('product_images/'.$product['product_thumbnail']) }}" width="100" height="100"></a></td>
                  <td>
                     <p>{{$product->price}} RON</p>
                  </td>
                    @foreach($details as $detail)
                        @if($product->id == $detail->product_id) 
                            <td><p>{{ $detail->quantity }} buc</p></td>
                        @endif
                   @endforeach 
                  <td>
                     <p>{{$orders['created_at']}}</p>
                  </td>
               </tr>
            @endforeach
            </tbody>
         </table>
         <div class="float-right m-4">
            <a class="btn btn-info m-4" href="{{ url(app()->getLocale().'/myorders') }}">{{ __('Back') }}</a>
        </div>
    </div>
  </div>
</div>
</div> --}}
@endsection