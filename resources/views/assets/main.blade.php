@extends('layouts.default')
<!Este formulario se encarga de ensenar todos
los resultados que se han obtenidocon los filtos aprlicados->
@section('content')


        <!--panel-->
<div class="panel panel-primary" id="main-panel">
    <!-- Default panel contents -->
    <div class="panel-heading"><h5 class="text-left">Location : {!! $loc!!}</h5>   <h5>Range :  {!! $min_price > 0  ? number_format($min_price).' &pound;' : 0 .' &pound;' !!}  -  {!!number_format($max_price).' &pound;'  !!}</h5><h5>Property Type: {!! $asset_type !!}</h5>  </div>
    <div class="panel-body">
        <!--table-->
        <table class="table table-striped" class="main-table">
            <th class="text-center"><H4>REFERENCE</H4></th>
            <th class="text-center"><H4>PRICE</H4></th>
            <th class="text-center"><H4>ACTION</H4></th>
            <br>

            <tbody>
            @foreach($result as $resultx)
                <tr>
                    <td><span class="listingsfocused"> {!! $resultx-> id!!} </span></td>
                    <td><span class="listingsfocused"> {!!number_format($resultx->price_sold).' &pound;' !!}</span></td>
                    <td><a href="show/{!! $resultx->id!!}"<span class="listingsfocused">View Detaills</span></td>
                </tr>

            @endforeach
            </tbody>
        </table>
        <!--end of table-->
    </div>
</div>
<!--end of panel-->

@endsection
