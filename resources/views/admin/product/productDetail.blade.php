<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.header')
@section('title', 'Product Detail')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"> {{ $p->name }} - Detail</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="txt-id">Product Id</label>
                                    <input type="text" class="form-control" id="txt-id" name="id" value="{{ $p->id }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Product Name</label>
                                    <input type="text" class="form-control" id="txt-name" name="name" value="{{ $p->name }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-price">Product Price</label>
                                    <input type="text" class="form-control" id="txt-price" name="price" value="{{ $p->price }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Artist</label>
                                    <input type="text" class="form-control" id="txt-name" name="name" value="{{ $p->artist }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-price">Author</label>
                                    <input type="text" class="form-control" id="txt-price" name="price" value="{{ $p->author }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="3" name="description" readonly placeholder="Enter ...">{{ $p->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label><br>
                                    <img width="100px" src="{{ url('images/'.$p->image) }}"/>
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
    </script>
@endsection
