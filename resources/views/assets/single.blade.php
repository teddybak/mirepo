@extends('layouts.default')
@section('content')

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-6 col-sm-offset-0">
            <table class="table table-dashed">
                <thead>
                    <tr>
                        <th><h3> Price</h3></th>
                        <th><h3> Location</h3></th>
                        <th><h3> Type</h3></th>
                        <th><h3> Action</h3></th>
                    </tr>
                </thead>
                <tbody>
                <td><h3>{!! number_format($show_asset[0]['price_sold']),' &pound;' !!}</h3></td>
                <td><h3>{!! $show_asset[0]['location'] !!}</h3></td>
                <td><h3>{!! $show_asset[0]['type'] !!}</h3></td>

                @if(Auth::check())
                <td><h3><a href="../booking/{!!$show_asset[0]['id']!!}/{!! Auth::user()->id !!}" class="btn btn-primary" role="button">Book!!</a></h3></td>
                @else
                <td><h3><a href="../auth/login" class="btn btn-primary" role="button">Login!!</a></h3></td>
                @endif
                </tbody>
            </table>
            <hr>
            <div class="row">
                @if (count($pictures) > 0)
                <div class="col-xs-6">
                    {!! HTML::image('/assets-images/'.$pictures[0]['description'])  !!}
                </div>
                <div class="col-xs-6">
                    {!! HTML::image('/assets-images/'.$pictures[0]['description'])  !!}
                </div>
                @endif
            </div><!--/row-->

            <div class="row">
                <div class="col-xs-6">
                    <h2>Features</h2>
                    <address>
                        <strong>HK Business Address</strong><br>
                        100 Business Address<br>
                        Kowloon<br>
                        Hong Kong<br>
                        Hong Kong<br>
                        Zip Code N/A<br>
                        <abbr title="Phone">P:</abbr> 01234 567 890
                    </address>
                </div>
                <div class="col-xs-6">
                    <h2>Contact Detaills</h2>
                    <address>
                        <strong>SZ Business Address</strong><br>
                        100 Business Address<br>
                        Futian District<br>
                        <br>
                        Shenzhen, Guangdong<br>
                        518000<br>
                        <abbr title="Phone">P:</abbr> 01234 567 890
                    </address>
                </div><!--/col-6-->
            </div><!--/row-->
        </div><!--/col-5-->

        <div class="col-xs-6">
            <h3>Location</h3>
            <hr>
        <div class="panel panel-default map">
            <div class="panel-body">
                <div class="google-map-canvas" id="mapa"></div>
            </div>
        </div>

            <div >
                <h4>Lorem Ipsum title</h4>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type
                specimen book. It has survived not only five centuries, but also the leap into
                electronic typesetting, remaining essentially unchanged. It was popularised in
                the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                and more recently with desktop publishing software like Aldus PageMaker
                including versions of Lorem Ipsum.
            </div>

 </div>
    </div>


</div>


<style type="text/css">
    #mapa{
        height: 275px}
</style>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
    function initialize() {
        var marcadores = [
        ['{!! $show_asset[0]['location'] !!}', {!! $show_asset[0]['long'] !!}, {!! $show_asset[0]['lat'] !!}]

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
                    infowindow.setContent(marcadores[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>


@stop

