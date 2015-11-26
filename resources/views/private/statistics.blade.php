<!--Load the AJAX API-->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">

    // Load the Visualization API and the piechart package.
    google.load('visualization', '1.0', {'packages':['corechart']});
    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawChart);
    // Callback that creates and populates a data table,
    // instantiates the pie chart, passes in the data and
    // draws it.
    function drawChart() {
    // Create the data table.
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Topping');
    data.addColumn('number', 'Slices');
    data.addRows([
            @foreach ($statistics as $key => $value)

                @foreach ($value as $keyx => $valuex)

                    @if ($keyx == 'type')
                      ['{{$valuex}}',
                    @endif

                    @if ($keyx == 'total')
                       {{$valuex}}] ,
                    @endif
                  
                @endforeach 
        @endforeach
    ]);
      
    // Set chart options
    var options = {'title':'Assets by Location',
              
            'width':400,
            'height':400,
        };
    // Instantiate and draw our chart, passing in some options.
    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
     
    chart.draw(data,  options );
    
        // Create the data table.
    var data2 = new google.visualization.DataTable();
    data2.addColumn('string', 'Topping');
    data2.addColumn('number', 'Slices');
    data2.addRows([
            @foreach ($statistics as $key => $value)

                @foreach ($value as $keyx => $valuex)

                    @if ($keyx == 'type')
                      ['{{$valuex}}',
                    @endif

                    @if ($keyx == 'sumprecio')
                       {{$valuex}}] ,
                    @endif
                  
                @endforeach 
        @endforeach
    ]); 
    
    // Set chart options
    var options2 = {'title':'Assets by Price',
            'width':400,
            'height':400};
    // Instantiate and draw our chart, passing in some options.
    var chart2 = new google.visualization.PieChart(document.getElementById('chart2_div'));
    chart2.draw(data2, options2);
     
    }
</script>
<!--Div that will hold the pie chart-->

@extends('layouts.default')

@section('content')

<div class="row">
    
    <div class="col-md-6">
       <div id="chart_div" style="width:50%; height:50%"></div> 
    </div>
    
     <div class="col-md-6">
       <div id="chart2_div" style="width:50%; height:50%"></div>        
    </div>
    
</div>
 
    

 
    
   
        

        
          
            
      
        

    
    
    
 


@stop