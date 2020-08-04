<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.header')
@section('title', 'Event - View')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <strong><h3 class="card-title">View Event {{ $e->name }}</h3></strong>
                        </div>
                        <!-- /.card-header -->
                        <!-- card-body start -->
                        <div class="card-body">
                            <div>
                                <h4><strong>User ID: {{ $e->userid }}  _   User Name: {{ $e->username }}</strong></h4>
                                <div class="row">
                                    <div class="col-6">
                                        <ul>
                                            <li>
                                                <span><b>Register Date:</b> {{ $e->registerdate }}</span>
                                            </li>
                                            <li>
                                                <span><b>Status:</b> {{ $e->status }}</span>
                                            </li>
                                            <li>
                                                <span><b>Views:</b> {{ $e->views }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <ul>
                                            <li>
                                                <span><b>Total Dept:</b> {{ $e->totaldept }}</span>
                                            </li>
                                            <li>
                                                <span><b>Has Paid:</b> {{ $e->haspaid }}</span>
                                            </li>
                                            <li>
                                                <span><b>Link:</b> {{ $e->url1 }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h5>----------------------------------------</h5>
                            </div>
                            <div class="col-12">
                                <div>
                                    <h4>{{ $e->name }}</h4>
                                    <div>
                                        <ul>
                                            <li>
                                                <span>
                                                    <b>From:</b> {{ $e->fromdate }}&nbsp;&nbsp;
                                                    <b>To:</b> {{ $e->todate }}
                                                </span>
                                                
                                            </li>
                                            <li>
                                                <B>Address:</B> {{ $e->address }}
                                            </li>
                                            <li>
                                                <B>Ticket Price:</B> {{ $e->ticketprice }}
                                            </li>
                                            <li>
                                                <B>Type:</B> {{ $e->type }}
                                            </li>
                                            <li>
                                                <B>Artist:</B> {{ $e->artist }}
                                            </li>
                                            <li>
                                                <b>Description:</b>
                                                <p>{{ $e->description }}</p>
                                            </li>
                                            <li>
                                                <b>Image: </b>
                                                <div class="col-lg-6 order-lg-2">
                                                    <div class="tours__item__pic">
                                                        <img align="center" width="550px" src="{{ url('images/'.$e->url2) }}"/>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->                          
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
