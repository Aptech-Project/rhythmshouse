<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.header')
@section('title', 'Product Update')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Update {{ $p->name }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{ url('admin/product/postProductUpdate/'.$p->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="txt-id">Product Id</label>
                                    <input type="text" class="form-control" id="txt-id" name="id" placeholder="1" value="{{ $p->id }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Product Name</label>
                                    <div style="color: red;" id="nameError"></div>
                                    <input type="hidden" class="form-control" id="oldName" name="name" value="{{ $p->name }}">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Input Product Name" value="{{ $p->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="txt-price">Product Price</label>
                                    <div style="color: red;" id="priceError"></div>
                                    <input type="text" class="form-control" id="price" name="price" placeholder="1" value="{{ $p->price }}">
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Artist</label>
                                    <input type="text" class="form-control" id="txt-name" name="artist" value="{{ $p->artist }}" >
                                </div>
                                <div class="form-group">
                                    <label for="txt-price">Author</label>
                                    <input type="text" class="form-control" id="" name="author" value="{{ $p->author }}">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="3" name="description" placeholder="Enter ...">{{ $p->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label><br>
                                    <img class="img-fluid" src="{{ url('images/'.$p->image) }}"/>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image">
                                            <label class="custom-file-label" for="image">Choose Image</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script-section')
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
        $("#price").on("blur", function () {
        $price = $(this).val();
        console.log($price);
        if ($price <= 0) {
            $("#priceError").text("Price must be positive number!");
            $("#price").focus();
        } else {
            $("#priceError").text("");
        }
    });
    $("#name").on("blur", function () {
        
        $name = $(this).val().toLowerCase();
        $oldName = $("#oldName").val().toLowerCase();
        if($oldName != $name){
            console.log($name);
            $.get({
                url: "http://localhost/rhythmshouse/public/admin/product/checkProductName/" + $name,
                success: function (res) {
                    if (res.error) {
                        $("#name").val("");
                        $("#name").focus();
                        $("#nameError").text(res.error);
                    } else {
                        $("#nameError").text("");
                    }
                },
            });
        }else{$("#nameError").text("")}
    });
    </script>
@endsection
