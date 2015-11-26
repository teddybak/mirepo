@extends('layouts.default')

@section('content')
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <style type="text/css">
            #mapa {
                height: 500px;
            }

            #display {

            }

        </style>

        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript">


            function initialize() {
                var marcadores = [
                        @foreach($show_asset as $stud)

                            [ '<img src="assets-images/{!! $stud->description !!}"> <br/><b>Detaills</b> <br/> <b>REF :</b> {!! $stud->asid !!} <br/> <b>Type :</b> {!! $stud->astype !!}<br/> <b>Location :</b>{!! $stud->location !!} <br/> <b>Price :</b>{!! $stud->price_sold !!} &pound; <br/><b> Link :</b> <a href="/show/{!! $stud->asid !!}">Detaills</> ', {!! $stud->long !!}, {!! $stud->lat !!},],
                    @endforeach


            ];


                var map = new google.maps.Map(document.getElementById('mapa'), {
                    zoom: 10,
                    center: new google.maps.LatLng(51.5287352, -0.381782, 2),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                });

                var infowindow = new google.maps.InfoWindow();
                var marker, i;

                for (i = 0; i < marcadores.length; i++) {
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
                        map: map
                    });

                    google.maps.event.addListener(marker, 'click', (function (marker, i) {
                        return function () {
                            infowindow.setContent("<div id='display'>" + marcadores[i][0] + "</div>")
                            infowindow.open(map, marker);
                        }
                    })(marker, i));
                }
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </head>
    <body>
    <div id="mapa"></div>
    </body>
    </html>
@stop











