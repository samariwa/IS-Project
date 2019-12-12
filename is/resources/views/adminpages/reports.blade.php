@extends('admin_main')
@section('title',' | Reports')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>

   <div class="chart" >{!! $doughnut->container() !!}</div>

  <div class="chart">{!! $bar->container() !!}</div>

    
 <script src=https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js charset=utf-8></script>
        {!! $doughnut->script() !!}
        {!! $bar->script() !!}
@endsection