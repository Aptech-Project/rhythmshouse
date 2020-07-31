@extends('web.layout.header')
@section('title', 'RhythmHouse | Event')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header container">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-10">
                <h1>Your Event</h1>
            </div>
            <div class="col-sm-2">
                <a>
                    <button style="width: 12vw;margin-top: 3vw;color: black;font-size: 1.5vw; background-color:white; border-color: indigo">
                        Create Event
                    </button><br>
                </a>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="dept" class="table table-bordered table-hover" style="text-align: center">
                        <thead>
                        <tr>
                            <th>EventId</th>
                            <th>EventName</th>
                            <th>RegisterDate</th>
                            <th>Views</th> 
                            <th>Total Dept</th>
                            <th>Has paid</th>
                        </tr>
                        </thead>
                        <tbody>                       
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>$</td>
                            <td>$</td>
                        </tr>
                        
                    </table>
                </div>
                
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
@endsection
@section('function')
<script>
    $(document).ready(function(){
        $("#event").addClass("active");
        $("header:first").addClass("header--normal");
        $("footer:first").addClass("footer--normal");
        $("#dept").DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
            });
    });
</script>
@endsection
