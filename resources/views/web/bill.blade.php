<!-- ') }} -->
@extends('web.layout.header')
@section('title', 'RhythmHouse | Membership')
@section('content')
<link type="text/css" rel="stylesheet"href="{{ asset('css/bill.css') }}" />
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="row main-section">
                    <div class="col-md-12 col-sm-12 header">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <h1><i class="fa fa-cloud" aria-hidden="true"></i>Rhythmshouse</h1>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                <p>Invoice {{$order->id}}</p>
                                <span>{{$order->date}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 content">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <p>To.</p>
                                <p>{{$order->receiver}}</p>
                                <p>Address</p>
                                <p>{{$order->address}}</p>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                <p>From</p>
                                <p>Rhythmshouse</p>
                                <p>Address</p>
                                <p>Ho_Chi_Minh</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                          <table class="table">
                              <thead>
                                <tr>
                                    <th>Image</th>
                                  <th>Description</th>
                                  <th>Qty</th>
                                  <th>Unit Price</th>
                                  <th>Amount</th>
                                </tr>
                              </thead>
                              <tbody>
                                  @foreach($orderDetail as $c)
                                <tr>
                                    <td ><img style="width: 30px;height:30px" src="{{ url('images/'.$c->image ) }}""></td>
                                    <td>{{$c->name}}</td>
                                  <td>{{$c->quantity}}</td>
                                  <td>{{$c->price}}</td>
                                  <td>{{$c->price * $c->quantity}}</td>
                                </tr>
                                
                                @endforeach
                                <tr>
                                  <th colspan="4" style="text-align: right;">Total:</td>
                                  <th>{{$order->totalmoney}}</td>
                                </tr>
                              </tbody>
                          </table>
                    </div>
                    {{-- <div>    
                        <a href="{{ url('web/listOrder') }}" style="position: absolute;right: 0;bottom: 0;"><i class="fa fa-id-card"></i>&nbsp;Order List</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

@endsection
<!-- Write function here -->
@section('function')
<script>
    $(document).ready(function(){
        // $("#membership").addClass("active");
        $("header:first").addClass("header--normal");
        $("footer:first").addClass("footer--normal");
    });
</script>
@endsection