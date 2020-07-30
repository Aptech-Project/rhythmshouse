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
                            <h3 class="card-title">View Event</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- card-body start -->
                        <div class="card-body">
                            <div class="col-12">
                                <div>
                                    <h2>Untold Festival 2020</h2>
                                    <div class="tours__text__widget">
                                        <ul>
                                            <li>
                                                <i class="fa fa-clock-o"></i>
                                                <span>8:00pm</span>
                                                <span>Dec 15, 2019</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-map-marker"></i>
                                                Funkhaus Berlin, Berlin, Germany
                                            </li>
                                        </ul>
                                        <div class="price">$ 35.00</div>
                                    </div>
                                    <div class="tours__text__desc">
                                        <p>Held in Europe’s electronic music capital on New Year’s Eve, the seminal Funkhaus Berlin
                                        hosts an impressive roster of techno artists worthy.</p>
                                        <p>Soundtracking the leap from 2019 into 2020 in what is one of the most anticipated nights
                                        of the year, in one of the city’s most hyped venues, HYTE Berlin NYE is the</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-2">
                                <div class="tours__item__pic">
                                    <img src="{{ asset('img/tours/tour-1.jpg') }}" alt="">
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
