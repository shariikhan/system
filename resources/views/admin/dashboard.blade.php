<?php
use APP\Http\Controllers\insurance_queriesController;
?>
@extends('admin.master')

@section('content');
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard
            
            </h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            
          </div>
          <!-- ./col -->
          

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <p>Users List</p>
              </div>
              <div class="icon">
              <i class="fas fa-users"></i>
              </div>
              <a href="{{ asset('admin/users_list') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
          <div class="col-lg-6 col-12">
 <?php   
 $lastdays = ''; 
 $counter = '';
$d = array();
for($i = 0; $i < 30; $i++){ 
    $lastdays .= '"'.date("M-d-Y", strtotime('-'. $i .' days')).'", ';
    $counter .= (rand(10,400)).', ';
}
?>
          
          </div>
          <script>
            window.chartColors = {
  red: 'rgb(255, 99, 132)',
  orange: 'rgb(255, 159, 64)',
  yellow: 'rgb(255, 205, 86)',
  green: 'rgb(75, 192, 192)',
  blue: 'rgb(54, 162, 235)',
  purple: 'rgb(153, 102, 255)',
  grey: 'rgb(231,233,237)'
};

var ctx = document.getElementById("query_traffic").getContext("2d");

var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: [<?php echo $lastdays;?>],
    datasets: [{
      label: 'Dataset',
      borderColor: window.chartColors.blue,
      borderWidth: 2,
      fill: false,
      data: [<?php echo $counter;?>]
    }]
  },
  options: {
    responsive: true,
    title: {
      display: true,
      text: 'Insurance Traffic for last Month'
    },
    tooltips: {
      mode: 'index',
      intersect: true
    },
    annotation: {
      annotations: [{
        type: 'line',
        mode: 'horizontal',
        //scaleID: 'y-axis-0',
        //value: 2225,
       // endValue: 0,
        borderColor: 'rgb(75, 192, 192)',
        borderWidth: 4,
        label: {
          //enabled: true,
          //content: 'Trendline',
          //yAdjust: -16,
        }
      }]
    }
  }
});
          </script>
          
        </div>
        <!-- /.row -->
        <!-- Main row -->
     
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection