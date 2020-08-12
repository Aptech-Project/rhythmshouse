@extends('web.layout.header')
@section('title', 'RhythmHouse | Event')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header" style="background-color: mediumslateblue">
                        <h3 class="card-title" style="text-align: center; color: mintcream"><strong>Create New Event</strong></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- card-body start -->
                    <form role="form" action="{{ url('web/posteventCreate/'.$user->id) }}" method="post" enctype="multipart/form-data" name="myForm" onsubmit="return validateForm()">
                        {{ csrf_field() }}
                    <div class="card-body">
                        
                    <br><h4><strong>User ID: {{$user->id}}  _   User Name: {{$user->username}}</strong></h4><br>
                        <div>
                            <div class="row">
                                <div class="col-6 form-group">
                                    <ul>
                                        <li>
                                            <span><b>Register Date:</b> <input class="form-control" id="txt-eventregister" name="eventregister" value="<?php echo now(); ?>" readonly ></span>
                                        </li>
                                    
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul>
                                       
                                        <li>
                                            <span><b>Link:</b> <input type="text" class="form-control" id="txt-eventlink" name="eventlink" required></span>
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
                                            <span><b>Event Name:</b><input type="text" class="form-control" id="txt-eventname" name="eventname"required ></span>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <label for="txt-name">Event Time:</label><br>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label for="txt-name">From:</label>
                                                        <input type="datetime-local" class="form-control" id="txt-name" name="eventfromdate" required>
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="txt-name">To:</label>
                                                        <input type="datetime-local" class="form-control" id="txt-name" name="eventtodate" required>
                                                    </div>
                                                </div>                                    
                                            </div>
                                        </li>
                                        <li>
                                            <B>Address:</B><input type="text" class="form-control" id="txt-eventaddress" name="eventaddress" required>
                                        </li>
                                        <li>
                                            <B>Ticket Price:</B><input type="text" class="form-control" id="txt-eventprice" name="eventprice" required>
                                        </li>
                                        <li>
                                            <B>Type:</B><input type="text" class="form-control" id="txt-eventtype" name="eventtype" required>
                                        </li>
                                        <li>
                                            <B>Artist:</B><input type="text" class="form-control" id="txt-eventartist" name="eventartist" required>
                                        </li>
                                        <li>
                                            <b>Description:</b>
                                            <textarea type="text" class="form-control" id="txt-eventdescription" name="eventdescription" required> </textarea>
                                        </li>
                                        <li>
                                            <b>Image:</b>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="image1" name="image1" required>
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
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-6" style="text-align: right">
                                <button type="submit" class="btn btn-primary">Create Event</button>
                            </div>
                            <div class="col-6" style="text-align: left">
                                <button type="reset" class="btn btn-danger" onclick="alertcancel()">Cancel</button>
                            </div>
                        </div>
                    </div>
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
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
</script>
<script>
    function alertcancel() {
        alert("You have Cancel creating an event!!!");
    }
</script>




@endsection
