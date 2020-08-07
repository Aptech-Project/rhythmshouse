<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('web.layout.header')
@section('title', 'event - update')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Update Event {{ $eventpaup->name }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{ url('web/posteventPartnerUpdate/'.$eventpaup->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="txt-id">Event Id:</label>
                                    <input type="text" class="form-control" id="txt-id" name="id" value="{{ $eventpaup->id }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Event Name:</label>
                                    <input type="text" class="form-control" id="txt-name" name="name" value="{{ $eventpaup->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Event Link:</label>
                                    <input type="text" class="form-control" id="txt-name" name="link" value="{{ $eventpaup->url1 }}">
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Event address:</label>
                                    <input type="text" class="form-control" id="txt-name" name="address" value="{{ $eventpaup->address }}">
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Event Time:</label><br>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="txt-name">From:</label>
                                            <input type="text" class="form-control" id="txt-name" name="fromdate" value="{{ $eventpaup->fromdate }}">
                                        </div>
                                        <div class="col-6">
                                            <label for="txt-name">To:</label>
                                            <input type="text" class="form-control" id="txt-name" name="todate" value="{{ $eventpaup->todate }}">
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Event Type:</label>
                                    <input type="text" class="form-control" id="txt-name" name="type" value="{{ $eventpaup->type }}">
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Event Artist:</label>
                                    <input type="text" class="form-control" id="txt-name" name="artist" value="{{ $eventpaup->artist }}">
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Event Ticket Price:</label>
                                    <input type="text" class="form-control" id="txt-name" name="price" value="{{ $eventpaup->ticketprice }}">
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Event Description:</label>
                                    <textarea type="text" class="form-control" id="txt-name" name="description" value="{{ $eventpaup->description }}"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="image">Image:</label><br>
                                    <img class="img-fluid" src="{{ url('images/'.$eventpaup->url2) }}"/>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image">
                                            <label class="custom-file-label" for="image">Choose Image</label>
                                        </div>
                                    </div>
                                </div>        
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-6" style="text-align: right">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                    <div class="col-6" style="text-align: left">
                                        <button type="reset" class="btn btn-danger" onclick="alertcancel()">Cancel</button>
                                    </div>
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
@section('function')
<script>
    $(document).ready(function(){
        $("#event").addClass("active");
        $("header:first").addClass("header--normal");
        $("footer:first").addClass("footer--normal");
        
    });
</script>
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
</script>
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>
@endsection
