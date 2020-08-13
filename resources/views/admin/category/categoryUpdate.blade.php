<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.header')
@section('title', 'Update Category')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Update {{ $c->categoryname }} Category</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{ url('admin/category/postCategoryUpdate/'.$c->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="txt-name">Category Name</label>
                                    <div style="color: red;" id="nameError"></div>
                                    <input type="hidden" class="form-control" id="categoryname" name="categoryname"  value="{{ $c->categoryname }}">
                                    <input type="text" class="form-control" id="newcategoryname" name="newcategoryname" required placeholder="Input Category Name" value="{{ $c->categoryname }}">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
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
        $("#newcategoryname").on("blur", function () {
            $newcategoryname = $(this).val().toLowerCase();
            $categoryname = $("#categoryname").val().toLowerCase();
            if($newcategoryname != $categoryname){
                $.get({
                    url: "http://localhost/rhythmshouse/public/admin/category/checkCategoryName/" + $newcategoryname,
                    success: function (res) {
                        if (res.error) {
                            $("#newcategoryname").val("");
                            $("#newcategoryname").focus();
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
