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
                    <h6 class="mb-4">Add Product</h6>
                    <form method="POST" action="{{ route('add_product') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Name</label>
                            <input type="text" required name="name" required class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="shortdescription" class="form-label">Short Description</label>
                            <input type="text" name="short_description" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="longdescription" class="form-label">Long Description</label>
                            <input type="text" name="long_description" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="longdescription" class="form-label">Select Category</label>
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
                            <label for="image" class="form-label">Product Images</label>
                            <input type="file" multiple name="product_images[]" class="form-control"
                                id="exampleInputPassword1">
                        </div>

                        @error('product_images')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <div class="mb-3">
                            <div class="images-preview-div"> </div>
                        </div>
                        <div class="mb-3">
                            <label for="longdescription" class="form-label">Select Gender</label>
                            <select name="gender" class="form-select form-select-sm mb-3"
                                aria-label=".form-select-sm example">
                                <option selected>Select Gender </option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="size" class="form-label">Price</label>
                            <input type="text" name="price" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="size" class="form-label">Discounted Price</label>
                            <input type="text" name="discounted_price" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="size" class="form-label">Size</label>
                            <input type="text" name="size" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="size" class="form-label">Color</label>
                            <input type="text" name="color" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="size" class="form-label">Delivery Charges</label>
                            <input type="text" name="delivery_charges" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
            {{-- <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <form>
                        <label for="name">Framework:</label>
                        <input type="text" id="name" placeholder="Enter a framework" autocomplete="off">
            
                        <button id="btnAdd">Add</button>
            
                        <label for="list">Framework List:</label>
                        <select id="list" name="list" multiple>
            
                        </select>
                        <button id="btnRemove">Remove Selected Framework</button>
                    </form>
                    <h6 class="mb-4">Add Color</h6>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="title" class="form-label">Name the Attribute</label>
                                <input type="text" id="attribute_name" name="" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                                <button type="" onclick="attribute_name()"
                                    class="btn btn-primary mt-2">Add</button>
                                <p id="demo"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="title" class="form-label">Add Attribute Value</label>
                                <input type="text" id="attribute_value" name="" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                                <button type="" onclick="attribute_value()"
                                    class="btn btn-primary mt-2">Add</button>
                            </div>
                        </div>
                    </div> 
                </div>
            </div> --}}
            {{-- <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Add Attribute</h6>
                    <form method="POST" action="{{ route('add_product') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Attribute</label>
                            <input type="text" required name="name" required class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div> --}}
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
    {{-- Attribute Function --}}
    <script>
        function attribute_name() {
            document.getElementById("demo").innerHTML = "Hello World";
        }
    </script>
    <script>
        const btnAdd = document.querySelector('#btnAdd');
        const btnRemove = document.querySelector('#btnRemove');
        const sb = document.querySelector('#list');
        const name = document.querySelector('#name');

        btnAdd.onclick = (e) => {
            e.preventDefault();

            // validate the option
            if (name.value == '') {
                alert('Please enter the name.');
                return;
            }
            // create a new option
            const option = new Option(name.value, name.value);
            // add it to the list
            sb.add(option, undefined);

            // reset the value of the input
            name.value = '';
            name.focus();
        };

        // remove selected option
        btnRemove.onclick = (e) => {
            e.preventDefault();

            // save the selected option
            let selected = [];

            for (let i = 0; i < sb.options.length; i++) {
                selected[i] = sb.options[i].selected;
            }

            // remove all selected option
            let index = sb.options.length;
            while (index--) {
                if (selected[index]) {
                    sb.remove(index);
                }
            }
        };
    </script>
@endsection
