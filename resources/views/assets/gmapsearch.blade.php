@extends('layouts.default')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-lg-12">



            <div class="col-xs-4">






                <?php
                $asset_type = \App\AssetType::lists('type', 'type');
                $location = \App\Location::lists('location', 'location');
                ?>

                {!! Form::open(array('action' => 'AssetsController@gmapsearchresult')) !!}

                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-group">
                            <div class="panel-body">



                                        <span class="label label-default">Select Property Types</span>

                                        <p>
                                            @foreach ($asset_type as $key => $value)
                                                <input type="checkbox" name="type[]" value="{!! $value !!}">  {!! $value
                                                !!}
                                                <br/>
                                            @endforeach
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="label label-default">Select Areas</span>

                                        <p>
                                            @foreach ($location as $key => $value)
                                                <input type="checkbox" name="location[]" value="{!! $value !!}">  {!!
                                                $value !!}  <br/>
                                            @endforeach
                                        </p>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <span class="label label-default">Select Mode</span>

                                        <p>
                                            <label for="asset" class="label label-default">Rent</label>
                                            {!! Form::radio('type_rs', 'rent') !!}
                                            <label for="asset" class="label label-default">Sale</label>
                                            {!! Form::radio('type_rs', 'sale', true)!!}
                                        </p>
                                    </div>

                                    <div class="col-md-6">
                                        <span class="label label-default">Number of Beds</span>
                                        <select name="num_beds" class="form-control">
                                            <option selected="selected">0</option>
                                            <?php
                                            for ($i = 1; $i <= 10; $i++) : ?>
                                            <option value="<?php echo $i  ?>"><?php echo $i; ?></option>
                                            <?php
                                            endfor;
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <span class="label label-default">Select minimum</span>
                                        <select name="min_price" class="form-control">
                                            <option selected="selected">0 &pound;</option>
                                            <?php
                                            for ($i = 1; $i <= 200; $i++) : ?>
                                            <option value="<?php echo $i * 10000  ?>"><?php echo number_format($i * 10000) . ' &pound;'; ?></option>
                                            <?php
                                            endfor;
                                            ?>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <span class="label label-default">Select maximum</span>
                                        <select name="max_price" class="form-control">
                                            <option selected="selected">0 &pound;</option>
                                            <?php
                                            for ($i = 1; $i <= 200; $i++) : ?>
                                            <option value="<?php echo $i * 10000; ?>"><?php echo number_format($i * 10000) . ' &pound;'; ?></option>
                                            <?php
                                            endfor;
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <p></p>

                                {!! Form::submit('Search..!',array('class'=>'btn btn-primary btn-block')) !!}
                            </div>
                        </div>
                    </div>




            <div class="col-xs-8">
                <div class="col-md-12">
                    <img src="/images/geosearch_header.jpg">
                </div>
            </div>
        </div>


        {!! Form::close() !!}




</div>


@endsection
