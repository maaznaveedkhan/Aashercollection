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
                <h6 class="mb-4">New Messages</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Message</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $item)
                                <tr>
                                    @if(empty($item))
                                        <p>No Record Present!</p>        
                                    @else
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->subject }}</td>
                                        <td>
                                            <a href="{{ route('view_message',$item->id) }}" type="button"
                                                class="btn btn-outline-success m-2">View</a>
                                        </td>
                                        <td>
                                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Actions</a>
                                            <div class="dropdown-menu bg-white border-0">
                                                <a href="{{ route('approve_order',$item->id) }}" class="dropdown-item">Respond</a>
                                                {{-- <a href="{{ route('cancel_order',$order->id) }}" class="dropdown-item">Reject Order</a> --}}
                                            </div>
                                            {{-- <a href="{{ route('edit_product',$item->id) }}" type="button"
                                                class="btn btn-outline-primary m-2">Edit</a>
                                            <a href="{{ route('delete_about',$item->id) }}" type="button"
                                                class="btn btn-outline-danger m-2">Delete</a> --}}
                                        </td>
                                    @endif
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