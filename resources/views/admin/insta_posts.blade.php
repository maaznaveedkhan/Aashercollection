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
                <h6 class="mb-4">Insta Post</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Images</th>
                                <th scope="col">Link</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($instas as $item)
                                <tr>
                                    @if(empty($item))
                                        <p>No Record Present!</p>        
                                    @else
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>{{ $item->title }}</td>
                                        <td><img src="{{ asset('images/insta_images/'.$item->image) }}"
                                                height="40px" width="40px" alt=""></td>
                                        <td> <a class="btn" href="{{ $item->post_link }}">Link</a></td>
                                        <td>
                                            <a href="{{ route('delete_insta',$item->id) }}" type="button"
                                                class="btn btn-outline-danger m-2">Delete</a>
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