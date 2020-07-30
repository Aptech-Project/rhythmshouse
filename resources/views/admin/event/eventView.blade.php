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
                            <strong><h3 class="card-title">View Event 1</h3></strong>
                        </div>
                        <!-- /.card-header -->
                        <!-- card-body start -->
                        <div class="card-body">
                            <div>
                                <h4><strong>User ID: 1  _   User Name: Aegon</strong></h4>
                                <div class="row">
                                    <div class="col-6">
                                        <ul>
                                            <li>
                                                <span><b>Register Date:</b> 16/07/2019</span>
                                            </li>
                                            <li>
                                                <span><b>Status:</b> Processing</span>
                                            </li>
                                            <li>
                                                <span><b>Views:</b> 0</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <ul>
                                            <li>
                                                <span><b>Total Dept:</b> 0</span>
                                            </li>
                                            <li>
                                                <span><b>Has Paid:</b> 0</span>
                                            </li>
                                            <li>
                                                <span><b>Link:</b> alnwalkerevent.com</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h5>----------------------------------------</h5>
                            </div>
                            <div class="col-12">
                                <div>
                                    <h4>Untold Festival 2020</h4>
                                    <div>
                                        <ul>
                                            <li>
                                                <span>
                                                    <b>From:</b> 8:00pm Dec 15, 2019&nbsp;&nbsp;
                                                    <b>To:</b> 8:00pm Dec 16,2019
                                                </span>
                                                
                                            </li>
                                            <li>
                                                <B>Address:</B> Funkhaus Berlin, Berlin, Germany
                                            </li>
                                            <li>
                                                <B>Ticket Price:</B> $35.00
                                            </li>
                                            <li>
                                                <B>Type:</B> EDM
                                            </li>
                                            <li>
                                                <B>Artist:</B> Alan Walker
                                            </li>
                                            <li>
                                                <b>Description:</b>
                                                <p>Held in Europe’s electronic music capital on New Year’s Eve, the seminal Funkhaus Berlin
                                                hosts an impressive roster of techno artists worthy.</p>
                                                <p>Soundtracking the leap from 2019 into 2020 in what is one of the most anticipated nights
                                                of the year, in one of the city’s most hyped venues, HYTE Berlin NYE is the</p>
                                            </li>
                                            <li>
                                                <b>Image: </b>
                                                <div class="col-lg-6 order-lg-2">
                                                    <div class="tours__item__pic">
                                                        <img src="{{ asset('img/tours/tour-1.jpg') }}" alt="">
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
