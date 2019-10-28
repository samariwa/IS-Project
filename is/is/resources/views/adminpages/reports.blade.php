@extends('admin_main')
@section('title',' | Reports')
@section('content')
     <script type="text/javascript">
      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Food');
        data.addColumn('number', 'Number of meal packages sold');
        data.addRows([
          ['Chapati', 132],
          ['Sukuma Wiki', 67],
          ['Cabbages', 50],
          ['Beef', 70],
          ['Ugali', 70],
          ['Others', 90]
        ]);

        // Set chart options
        var options = {'title':'Fast moving meals',
                       'width':1100,
                       'height':1000};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    <div id="chart_div"></div>

<script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Week", "Total weekly orders for past four weeks", { role: "style" } ],
        ["Week 1", 257, "#b87333"],
        ["Week 2", 348, "silver"],
        ["Week 3", 192, "gold"],
        ["Week 4", 243, "color: #e5e4e2"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Total weekly orders for the past four weeks",
        width: 1100,
        height: 1000,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
    </script>
    <div id="columnchart_values"></div>

<script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

   function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Week', 'Exe', 'Ajab', 'Ndovu', 'Mpishi', 'Dola'],
          ['Week 1',  500,      230,     348,           723,         124],
          ['Week 2',  530,      234,     539,           610,         132],
          ['Week 3',  491,      196,     432,           515,         138],
          ['Week 4',  360,      320,     414,           438,         134],
          ['Week 5',  400,      320,     467,           600,         136],
          ['Week 6',  620,      358,     480,           643,         140],
          ['Week 7',  652,      400,     512,           690,         137],
          ['Week 8',  600,      456,     558,           800,         119]
        ]);

        var options = {
          title: 'Order quantity trend for flour brands for the past 2 months',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 1100px; height: 1000px"></div>
@endsection