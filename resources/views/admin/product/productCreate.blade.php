@extends('admin.layout.header') @section('title', 'RhythmHouse | Product Create') @section('content')
<br />
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Create Product</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ url('admin/product/postProductCreate') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="txt-name">Product Name</label>
                                <div style="color: red;" id="nameError"></div>
                                <input type="text" class="form-control" id="name" name="name" required placeholder="Input Product Name" />
                            </div>
                            <div class="form-group">
                                <label for="txt-name">Category</label>
                                <select class="form-control" id="txt-name" name="category" required>
                                    <option value="" disabled selected hidden>Choose a category</option>
                                    @foreach($categories as $c)
                                    <option value="{{$c->categoryname}}">{{$c->categoryname}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="txt-price">Artist</label>
                                <input type="text" class="form-control" id="" name="artist" required placeholder="Who performed this ?" />
                            </div>
                            <div class="form-group">
                                <label for="txt-price">Author</label>
                                <input type="text" class="form-control" id="" name="author" required placeholder="Composer" />
                            </div>
                            <div class="form-group">
                                <label for="txt-price">Product Price</label>
                                <div style="color: red;" id="priceError"></div>
                                <input type="number" class="form-control" id="price" name="price" required placeholder="12$" />
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" name="description" required placeholder="Enter ..."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image" required />
                                        <label class="custom-file-label" for="image">Choose Image</label>
                                    </div>
                                </div>
                            </div>
                            <label for="image">Demo Song</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="demo" name="demo" />
                                    <label class="custom-file-label" for="image">Choose Demo Song</label>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button id="btnSubmit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
@endsection @section('script-section')
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        bsCustomFileInput.init();
    });

    $("#keyword").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#productDiv #productDivSub").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
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
        console.log($name);
        $.get({
            url: "checkProductName/" + $name,
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
    });
</script>
@endsection
