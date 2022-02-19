@extends('layouts.admin')
@section('header', 'Home')
 
@section('css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
 
@section('content')
<div class="row">
  <div class="col-lg-3 col-6">
    <div class="small-box bg-info">
        <div class="inner">
          <h3>{{ $total_books }}</h3>
            <p>Total Buku</p>
        </div>
        <div class="icon">
          <i class="fa fa-book"></i>
        </div>
      <a href="{{ url('books') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>

  <div class="col-lg-3 col-6">
    <div class="small-box bg-success">
        <div class="inner">
          <h3>{{ $total_members }}</h3>
            <p>Total Member</p>
        </div>
        <div class="icon">
          <i class="fa fa-book"></i>
        </div>
      <a href="{{ url('members') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>

  <div class="col-lg-3 col-6">
    <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{ $total_publishers }}</h3>
            <p>Total Publisher</p>
        </div>
        <div class="icon">
          <i class="fa fa-book"></i>
        </div>
      <a href="{{ url('publishers') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>

  <div class="col-lg-3 col-6">
    <div class="small-box bg-danger">
        <div class="inner">
          <h3>{{ $total_transactions }}</h3>
            <p>Data Peminjaman</p>
        </div>
        <div class="icon">
          <i class="fa fa-book"></i>
        </div>
      <a href="{{ url('transactions') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>

  <div class="col-lg-4">
    <div class="card card-danger">
      <div class="card-header">
        <h3 class="card-title">Grafik Penerbit</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fa fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%"></canvas>
      </div>
    </div>
  </div>

  <div class="col-lg-4">
    <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title">Grafik Peminjaman</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fa fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="chart">
        <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%"></canvas>
        </div>
      </div>
    </div>
  </div>

	<div class="col-lg-4">
     <!-- PIE CHART -->
       <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Catalog</h3>
           <div class="card-tools">
               <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
                </button>
            </div>
            </div>
            <div class="card-body">
            <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

</div>
@endsection
<!-- DataTables  & Plugins -->
<script src="{{ asset('assets../../plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
<script type="text/javascript">

  var label_donut = '{!! json_encode($label_donut) !!}';
  var data_donut = '{!! json_encode($data_donut) !!}';
  var data_bar = '{!! json_encode($data_bar) !!}';
  var label_pie = '{!! json_encode($label_pie) !!}';
  var data_pie = '{!! json_encode($data_pie) !!}';

  $(function () {

  var donutChartCanvas =  $('#donutChart').get(0).getContext('2d')
  var donutData = {
    labels: JSON.parse(label_donut), 
        // [
        // 'Chrome',
        // 'IE',
        // 'Firefox',
        // 'Safari',
        // 'Opera',
        // 'Navigator',
    // ],
    datasets: [
      {
        // data: [200,500,400,600,300,100],
        data: JSON.parse(data_donut),
        backgroundColor: ['#f56954', '#00a65a', '#f39c12','#00c0ef', '#3c8dbc', '#d2d6de', '#655D8A', '#9AD0EC', '#FA58B6', '#D67D3E', '#DD4A48', '#F3C5C5', '#FFE162', '#FF6464', '#91C483', '#BF8B67', '#DACC96', '#5800FF', '#96CEB4', '#D9534F'],
      }
    ]
  }
  var donutOptions = {
    maintainAspectRatio : false,
    responsive : true,
  }
  new Chart(donutChartCanvas, {
    type : 'doughnut',
    data : donutData,
    options : donutOptions
  })


  var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
  var pieData        = {
  labels: JSON.parse(label_pie),
  datasets: [
      {
      data: JSON.parse(data_pie),
      backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de', '#655D8A', '#9AD0EC', '#FA58B6',
            '#D67D3E', '#DD4A48', '#F3C5C5', '#FFE162', '#FF6464', '#91C483', '#BF8B67', '#DACC96', '#5800FF', '#96CEB4', '#D9534F' ],
      }
  ]
  }
  var pieOptions     = {
  maintainAspectRatio : false,
  responsive : true,
  }

  var areaChartData = {
    labels : ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
    datasets: JSON.parse(data_bar)
   //  [
   //  {
   //    label   : 'Digital Goods',
   //    backgroundColor : 'rgba(60,141,188,0.9)',
   //    data    : [28, 48, 40, 19, 86, 27, 90]
   //  },
   //  {
	  // label   : 'Electronics',
   //    backgroundColor : 'rgba(210,214,222,1)',
   //    data    : [65, 59, 80, 81, 56, 55, 40]
   //  },
   //  ]
  }

  var barChartCanvas = $('#barChart').get(0).getContext('2d')
  var barChartData = $.extend(true, {}, areaChartData)
  // var temp0 = areaChartData.datasets[0]
  // var temp1 = areaChartData.datasets[1]
  // barChartData.datasets[0] = temp0
  // barChartData.datasets[1] = temp1

  var barChartOptions = {
  	responsive: true,
  	maintainAspectRatio : false,
  	datasetFill : false
  }

</script>