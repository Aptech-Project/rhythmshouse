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
                            <h3 class="card-title"> {{ $us->id }} - Detail</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="txt-id">User Id</label>
                                    <input type="text" class="form-control" id="txt-id" name="id" value="{{ $us->id }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">User Name</label>
                                    <input type="text" class="form-control" id="txt-username" name="username" value="{{ $us->username }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-price">Email</label>
                                    <input type="text" class="form-control" id="txt-email" name="email" value="{{ $us->email }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">BirthDay</label>
                                    <input type="text" class="form-control" id="txt-birthday" name="birthday" value="{{ $us->birthday }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-price">Name</label>
                                    <input type="text" class="form-control" id="txt-name" name="name" value="{{ $us->name }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>PhoneNumber</label>
                                    <input type="text" class="form-control" id="txt-phonenumber" name="phonenumber" value="{{ $us->phonenumber }}" readonly>
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
