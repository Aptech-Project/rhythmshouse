@extends('admin.layout.header')
@section('title', 'index')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>

        <!-- Content Row -->
        <div class="row">

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Last Month)</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">${{ $earnLastmonth-> sum('totalmoney')}}</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (This Year)</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">${{ $earnThisyear-> sum('totalmoney')}}</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Earnings (Event)</div>
                    <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">${{$receivable-> sum('haspaid')}}</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Pending Requests Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Event Requests</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$pendingRequest-> count('status')}}</div>
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Event Out of Date</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$pendingRequest1-> count('todate')}}</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Content Row -->

        <div class="row">

          <!-- Area Chart -->
          <div class="col-xl-12">
            <div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
              </div>
              <!-- Card Body -->
              <div class="card-body">
                <div class="chart-area">
                  <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- End of Main Content -->
@endsection
@section('script-section')
<!--Script for chart-->
<?php
$dataPoints = 
  array(
  array("y" => 100, "label" => "January"),
  array("y" => 250, "label" => "February"),
  array("y" => 300, "label" => "March"),
  array("y" => 400, "label" => "April"),
  array("y" => 200, "label" => "May"),
  array("y" => 500, "label" => "June"),
  array("y" => 600, "label" => "July"),
  array("y" => 100, "label" => "August"),
  array("y" => 700, "label" => "September"),
  array("y" => 500, "label" => "October"),
  array("y" => 1500, "label" => "November"),
  array("y" => 2000, "label" => "December") 
  );
?>
<script>
  window.onload = function () {
   
  var chart = new CanvasJS.Chart("chartContainer", {
    title: {
      text: "Salary Over a Year"
    },
    axisY: {
      title: "Total Money"
    },
    data: [{
      type: "line",
      dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    }]
  });
  chart.render();
   
  }
  </script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

@endsection
