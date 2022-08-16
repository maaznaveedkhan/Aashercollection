@extends('user.layouts.appuser')
@section('content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-md-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Basic Form</h6>
                    <form method="POST" action="{{ route('update_info', Auth::user()->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputName1" class="form-label">Name</label>
                            <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="exampleInputName1" class="form-label">Phone Number</label>
                                <input type="text" name="phone" value="{{ Auth::user()->phone }}" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="exampleInputName1" class="form-label">Postal Code</label>
                                <input type="text" name="postal_code" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label">City</label>
                                <input type="text" name="city" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" name="address" placeholder="Enter Your Complete Address..." id="floatingTextarea"
                                style="height: 100px;"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Profile Picture</label>
                            <input type="file" name="profile_picture" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form End -->
@endsection
