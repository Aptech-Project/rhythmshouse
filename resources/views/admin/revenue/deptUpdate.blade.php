<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.header')
@section('title', 'event - update')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Update Dept of Event {{ $e->name }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{ url('admin/revenue/postdeptUpdate/'.$e->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="txt-username">UserName</label>
                                    <input type="text" class="form-control" id="txt-username" name="username"  value="{{ $e->username }}"readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-id">Event Id</label>
                                    <input type="text" class="form-control" id="txt-id" name="id" value="{{ $e->id }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Event Name</label>
                                    <input type="text" class="form-control" id="txt-name" name="name" value="{{ $e->artist }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Total Dept</label>
                                    <input type="text" class="form-control" id="txt-totaldept" name="totaldept" value="{{ $e->totaldept }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Has Paid</label>
                                    <input type="text" class="form-control" id="txt-haspaid" name="haspaid" value="{{ $e->haspaid }}">
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
