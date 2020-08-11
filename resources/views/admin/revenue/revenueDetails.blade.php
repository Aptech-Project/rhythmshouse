@extends('admin.layout.header')
@section('title', 'revenue details')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Revenue Details </h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <h3>* Revenue From Orders</h3>
                        <table id="reorders" class="table table-bordered table-hover" style="text-align: center">
                            <thead>
                            <tr>
                                <th>OrderId</th>
                                <th>DeliveryDate</th>
                                <th>TotalMoney ($)</th> 
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($revenueorder as $e)
                            <tr>
                                <td>{{ $e->id }}</td>
                                <td>{{ $e->registerdate }}</td>
                                <td>${{ $e->ticketprice }}</td>
                            </tr>
                            @endforeach
                            <tfoot>
                                <tr>
                                    <th colspan="2" style="text-align:right">Total:</th>
                                    <th colspan="3" style="text-align:center">${{$revenueorder -> sum('ticketprice')}}</th> 
                                </tr>
                            </tfoot>
                        </table>
                        <br><br>
                        <h3>* Revenue From Event</h3>
                        <table id="reevent" class="table table-bordered table-hover" style="text-align: center">
                            <thead>
                            <tr>
                                <th>EventId</th>
                                <th>EventName</th>
                                <th>RegisterDate</th>
                                <th>Views</th> 
                                <th>Total Dept ($)</th>
                                <th>Has paid ($)</th>
                                <th>Remaining ($)</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($revenueevent as $e)
                            <tr>
                                <td>{{ $e->id }}</td>
                                <td>{{ $e->name }}</td>
                                <td>{{ $e->registerdate }}</td>
                                <td>{{ $e->views }}</td>
                                <td>${{ $e->totaldept }}</td>
                                <td>${{ $e->haspaid }}</td>
                                <td>${{ $e->deptremaining }}</td>
                            </tr>
                            @endforeach
                            <tfoot>
                                <tr>
                                    <th colspan="4" style="text-align:right">Total:</th>
                                    <th colspan="1" style="text-align:center">${{$revenueevent -> sum('totaldept')}}</th>
                                    <th colspan="1" style="text-align:center">${{$revenueevent -> sum('haspaid')}}</th> 
                                    <th colspan="1" style="text-align:center">${{$revenueevent -> sum('deptremaining')}}</th>
                                </tr>
                            </tfoot>
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
@section('script-section')
    <script>
        $(function () {
            $('#reorders').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
            });
            
        });
        $(function () {
            $('#reevent').DataTable({
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

