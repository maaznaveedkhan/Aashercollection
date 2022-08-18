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
                <dl class="row mb-0">
                    <dt class="col-sm-4">Name</dt>
                    <dd class="col-sm-8">{{ $message['name'] }}</dd>

                    <dt class="col-sm-4">Phone</dt>
                    <dd class="col-sm-8">{{ $message['phone'] }}</dd>

                    <dt class="col-sm-4">Email</dt>
                    <dd class="col-sm-8">{{ $message['email'] }}</dd>

                    <dt class="col-sm-4 text-truncate">Subject</dt>
                    <dd class="col-sm-8">{{ $message['subject'] }}</dd>

                    <dt class="col-sm-4">Message</dt>
                    <dd class="col-sm-8">{{ $message['message'] }}</dd>
                </dl>
            </div>
        </div>
    </div>
</div>
<!-- Form End -->
@endsection