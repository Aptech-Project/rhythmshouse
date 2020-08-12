@extends('web.layout.header')
@section('title', 'RhythmHouse | Event')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header container">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-10">
                <h1>Event Managerment</h1>
            </div>
            <div class="col-sm-2">
                <a href="{{ url('web/eventCreate/'.$users->id)}}">
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
                    <h3 style="color: indigo"><b>Event Approved</b></h3><br>
                    <table id="dept" class="table table-bordered table-hover" style="text-align: center">
                        <thead>
                        <tr>
                            <th>EventId</th>
                            <th>EventName</th>
                            <th>RegisterDate</th>
                            <th>Status</th>
                            <th>Views</th> 
                            <th>Total Dept</th>
                            <th>Has paid</th>
                            <th>Remaining</th>
                        </tr>
                        </thead>
                        <tbody>                       
                            @foreach($eventmana as $e)
                            <tr>
                                <td>{{ $e->id }}</td>
                                <td>{{ $e->name }}</td>
                                <td>{{ $e->registerdate }}</td>
                                <td>{{ $e->status }}</td>
                                <td>{{ $e->views }}</td>
                                <td>${{ $e->totaldept }}</td>
                                <td>${{ $e->haspaid }}</td>
                                <td>${{ $e->deptremaining }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="5" style="text-align:right">Total:</th>
                                <th colspan="1" style="text-align:center">${{$eventmana -> sum('totaldept')}}</th>
                                <th colspan="1" style="text-align:center">${{$eventmana -> sum('haspaid')}}</th> 
                                <th colspan="1" style="text-align:center">${{$eventmana -> sum('deptremaining')}}</th>
                            </tr>
                        </tfoot>
                        
                    </table>
                    <br><br>
                    <h3 style="color: indigo"><b>Event In Processing</b></h3><br>
                    <table id="dept1" class="table table-bordered table-hover" style="text-align: center">
                        <thead>
                        <tr>
                            <th>EventId</th>
                            <th>EventName</th>
                            <th>RegisterDate</th>
                            <th>Status</th>
                            <th>Poster</th> 
                            <th>Link</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>                       
                            @foreach($eventmana1 as $e)
                            <tr style="t">
                                <td style="vertical-align: middle">{{ $e->id }}</td>
                                <td style="vertical-align: middle">{{ $e->name }}</td>
                                <td style="vertical-align: middle">{{ $e->registerdate }}</td>
                                <td style="vertical-align: middle">{{ $e->status }}</td>
                                <td class="text-center"><img width="100px" src="{{ url('images/'.$e->url2) }}"/></td>
                                <td style="vertical-align: middle">{{ $e->url1 }}</td>
                                <th style="vertical-align: middle">
                                    <a class="btn btn-info btn-sm" href="{{ url('web/eventPartnerUpdate/'.$e->userid.'/'.$e->id) }}">
                                        <i class="fas fa-pencil-alt"></i> update
                                    </a>
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                </div>
                <div class="card-footer">
                    <p>*NOTE: Your event could be approved after 3 days, in that time, you can update it, once the admin approved it, you have to send mail to admin to delete it to create new one</p>
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
        $("#dept1").DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
            });
    });
</script>
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
</script>
@endsection
