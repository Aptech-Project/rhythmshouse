@extends('admin.layout.header')
@section('title', 'product - create new')
@section('content')
    <br>
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
                                    <input type="text" class="form-control" id="txt-name" name="name" placeholder="Input Product Name">
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Category</label>
                                    <select class="form-control" id="txt-name" name="category" placeholder="Input Product Name">
                                        <option value="" disabled selected hidden>Choose a category</option>
                                        <option value="pop">Pop</option>
                                        <option value="rock">Rock</option>
                                        <option value="ballad">Ballad</option>
                                        <option value="country">Country</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="txt-price">Artist</label>
                                    <input type="text" class="form-control" id="txt-price" name="artist" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="txt-price">Author</label>
                                    <input type="text" class="form-control" id="txt-price" name="author" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="txt-price">Product Price</label>
                                    <input type="text" class="form-control" id="txt-price" name="price" placeholder="12$">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="3" name="description" placeholder="Enter ..."></textarea>
                                </div>
                                <div class="form-group">
                                <label for="image">Image 1</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image">
                                            <label class="custom-file-label" for="image">Choose Image</label>
                                        </div>
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
    </script>
@endsection
