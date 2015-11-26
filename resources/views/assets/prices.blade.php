@extends('layouts.default')

@section('content')



    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script>
        google.load("visualization", "1", {packages: ["corechart"]});
        google.setOnLoadCallback(drawChart);
        google.setOnLoadCallback(drawChart2);
        google.setOnLoadCallback(drawChart3);
        google.setOnLoadCallback(drawChart4);


        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Total assets by zone', {role: 'style'}],

                @foreach ($type_id1 as $key => $object)
                ['{{ $object->location }}', {{ $object->total }}, 'color: orange'],
                @endforeach


            ]);

            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                {
                    calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation"
                },
                2]);

            var options = {
                title: "Assets by zone",
                width: 300,
                height: 200,
                bar: {groupWidth: "95%"},
                legend: {position: "none"},
            };
            var chart = new google.visualization.PieChart(document.getElementById("barchart_values"));
            chart.draw(view, options);
        }

        function drawChart2() {
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Average Prices by zone', {role: 'style'}],

                @foreach ($type_id1 as $key => $object)
                ['{{ $object->location }}', {{ $object->sumprecio }}, 'color: blue'],
                @endforeach


            ]);

            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                {
                    calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation"
                },
                2]);

            var options = {
                title: "Average price by zone",
                width: 300,
                height: 200,
                bar: {groupWidth: "95%"},
                legend: {position: "none"},
            };
            var chart = new google.visualization.PieChart(document.getElementById("barchart_values2"));
            chart.draw(view, options);
        }


        function drawChart3() {
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Total assets by zone', {role: 'style'}],

                @foreach ($type_id3 as $key => $object)
                ['{{ $object->location }}', {{ $object->total }}, 'color: orange'],
                @endforeach


            ]);

            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                {
                    calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation"
                },
                2]);

            var options = {
                title: "Average prices per  assets by zone",
                width: 300,
                height: 200,
                bar: {groupWidth: "95%"},
                legend: {position: "none"},
            };
            var chart = new google.visualization.PieChart(document.getElementById("barchart_values3"));
            chart.draw(view, options);
        }

        function drawChart4() {
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Average Prices by zone', {role: 'style'}],

                @foreach ($type_id4 as $key => $object)
                ['{{ $object->location }}', {{ $object->sumprecio }}, 'color: blue'],
                @endforeach


            ]);

            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                {
                    calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation"
                },
                2]);

            var options = {
                title: "Total assets by zone",
                width: 300,
                height: 200,
                bar: {groupWidth: "95%"},
                legend: {position: "none"},
            };
            var chart = new google.visualization.PieChart(document.getElementById("barchart_values4"));
            chart.draw(view, options);
        }


    </script>

    <div class="row">

        <div class="col-lg-12">

            <div class="col-lg-6">
                <div id="barchart_values">

                </div>
            </div>

            <div class="col-lg-6">
                <div id="barchart_values2">

                </div>

            </div>


        </div>

    </div>

    <div class="row">

        <div class="col-lg-12">

            <div class="col-lg-6">
                <div id="barchart_values3">

                </div>
            </div>

            <div class="col-lg-6">
                <div id="barchart_values4">

                </div>

            </div>


        </div>

    </div>




@stop