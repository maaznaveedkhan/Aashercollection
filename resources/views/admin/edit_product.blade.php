@extends('admin.layouts.appadmin')
@section('content')
    <style>
        .images-preview-div img {
            padding: 10px;
            max-width: 100px;
        }
    </style>
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
            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Update Product</h6>
                    <form method="POST" action="{{ route('update_product', $product->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Name</label>
                            <input type="text" required name="name" value="{{ $product->name }}" required
                                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="shortdescription" class="form-label">Short Description</label>
                            <input type="text" name="short_description" value="{{ $product->short_description }}"
                                class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="longdescription" class="form-label">Long Description</label>
                            <input type="text" name="long_description" value="{{ $product->long_description }}"
                                class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="longdescription" class="form-label">Select Category</label>
                            <label for="longdescription" class="form-label">Long Description</label>
                            <select name="category_id" class="form-select form-select-sm mb-3"
                                aria-label=".form-select-sm example">
                                <option selected>Select Category </option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Product Thumbnail</label>
                            <input type="file" name="product_thumbnail" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-2">
                                    <img class="img-fluid"
                                        src="{{ asset('images/product_images/' . $product['product_thumbnail']) }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Product Images</label>
                            <input type="file" multiple name="product_images[]" class="form-control"
                                id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                {{-- {{ dd(json_decode($product->product_images)) }} --}}
                                @foreach (json_decode($product->product_images) as $item)
                                    <div class="col-md-2">
                                        <img class="img-fluid" src="{{ asset('images/product_images/' . $item) }}"
                                            alt="">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        @error('product_images')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <div class="mb-3">
                            <div class="images-preview-div"> </div>
                        </div>
                        <div class="mb-3">
                            <label for="size" class="form-label">Price</label>
                            <input type="text" name="price" value="{{ $product->price }}" class="form-control"
                                id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="size" class="form-label">Discounted Price</label>
                            <input type="text" name="discounted_price" value="{{ $product->discounted_price }}"
                                class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="size" class="form-label">Size</label>
                            <input type="text" name="size" value="{{ $product->size }}" class="form-control"
                                id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="size" class="form-label">Color</label>
                            <input type="text" name="color" value="{{ $product->color }}" class="form-control"
                                id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="size" class="form-label">Delivery Charges</label>
                            <input type="text" name="delivery_charges" value="{{ $product->delivery_charges }}"
                                class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form End -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(function() {
            // Multiple images preview with JavaScript
            var previewImages = function(input, imgPreviewPlaceholder) {
                if (input.files) {
                    var filesAmount = input.files.length;
                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();
                        reader.onload = function(event) {
                            $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(
                                imgPreviewPlaceholder);
                        }
                        reader.readAsDataURL(input.files[i]);
                    }
                }
            };
            $('#images').on('change', function() {
                previewImages(this, 'div.images-preview-div');
            });
        });
    </script>
@endsection
