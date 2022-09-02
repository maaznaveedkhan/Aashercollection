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
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Products</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Price</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->name }}</td>
                                <td><img src="{{ asset('images/product_images/'.$item->product_thumbnail) }}"
                                        height="40px" width="40px" alt=""></td>
                                <td>Rs. {{ $item->price }}</td>
                                <td>
                                    <a href="{{ route('view_product',$item->id) }}" type="button"
                                        class="btn btn-outline-success m-2">View</a>
                                    <a href="{{ route('edit_product',$item->id) }}" type="button"
                                        class="btn btn-outline-primary m-2">Edit</a>
                                    <a href="{{ route('delete_product',$item->id) }}" type="button"
                                        class="btn btn-outline-danger m-2">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                
                            </tr>
                        </tfoot>
                    </table>
                    <div class="d-flex justify-content-center">
                        {!! $products->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Form End -->
@endsection