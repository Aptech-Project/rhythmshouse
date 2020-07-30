@extends('web.layout.header')
@section('title', 'RhythmHouse | Event')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <strong><h3 class="card-title">Create Event</h3></strong>
                    </div>
                    <!-- /.card-header -->
                    <!-- card-body start -->
                    <form role="form" action="{{ url('/') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <div class="card-body">
                        
                            <h4><strong>User ID: 1  _   User Name: Aegon</strong></h4>
                        <div>
                            <div class="row">
                                <div class="col-6 form-group">
                                    <ul>
                                        <li>
                                            <span><b>Register Date:</b> <input type="text" class="form-control" id="txt-eventregister" name="eventregister" ></span>
                                        </li>
                                    
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul>
                                       
                                        <li>
                                            <span><b>Link:</b> <input type="text" class="form-control" id="txt-eventlink" name="eventlink" ></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 form-group">
                            <div>
                                <div>
                                    <ul>
                                        <li>
                                            <span><b>Event Name:</b><input type="text" class="form-control" id="txt-eventname" name="eventname" ></span>
                                        </li>
                                        <li>
                                            <span>
                                                <b>From:</b><input type="date" class="form-control" id="txt-eventfromdate" name="eventfromdate" >
                                            </span>
                                            
                                        </li>
                                        <li>
                                            <span>
                                                <b>To:</b> <input type="date" class="form-control" id="txt-eventtodate" name="eventtodate" >
                                            </span>
                                            
                                        </li>
                                        <li>
                                            <B>Address:</B><input type="text" class="form-control" id="txt-eventaddress" name="eventaddress" >
                                        </li>
                                        <li>
                                            <B>Ticket Price:</B><input type="text" class="form-control" id="txt-eventprice" name="eventprice" >
                                        </li>
                                        <li>
                                            <B>Type:</B><input type="text" class="form-control" id="txt-eventtype" name="eventtype" >
                                        </li>
                                        <li>
                                            <B>Artist:</B><input type="text" class="form-control" id="txt-eventartist" name="eventartist" >
                                        </li>
                                        <li>
                                            <b>Description:</b>
                                            <p><input type="text" class="form-control" id="txt-eventdescription" name="eventdescription" ></p>
                                        </li>
                                        <li>
                                            <b>Image:</b>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="image1" name="image1">
                                                        <label class="custom-file-label" for="image">Choose Image</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->  
                    </form>
                    <!-- /.form-->                        
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
@endsection
@section('function')
<script>
    $(document).ready(function(){
        $("#event").addClass("active");
        $("header:first").addClass("header--normal");
        $("footer:first").addClass("footer--normal");
    });
</script>
@endsection
@section('script-section')
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
 
    <script type="text/javascript">
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>
@endsection