@extends('layouts.default')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <img src="/images/index.jpg">
            </div>
            <div class="col-xs-6">
                <?php
                $asset_type = \App\AssetType::lists('type', 'type');
                $location = \App\Location::lists('location', 'location');
                ?>

                {!! Form::open(array('action' => 'AssetsController@store')) !!}

                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-group">
                            <div class="panel-body">

                            <div class="row">
                            	<div class="col-md-12">
                                <span class="label label-default">Select assets type</span>
                                 
                                 {!! Form::select('type', $asset_type, null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                                
 
                            

                                <span class="label label-default">Select area</span>
                                {!! Form::select('location', $location, null, ['class' => 'form-control']) !!}
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

                                <p></p>
                                {!! Form::submit('Search..!',array('class'=>'btn btn-primary btn-block')) !!}
                            </div>
                        </div>
                    </div>
                </div>

                {!! Form::close() !!}
            </div>
        </div>



        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="/images/thumbnail1.jpg" alt="Generic placeholder thumbnail">
                    <div class="caption">
                        <div class="pods sell-residential">
                            <div class="btnx"><a class="clean" href="/rent">Rent</a><span><i class="fa fa-chevron-right"></i></span></div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="/images/thumbnail2.jpg" alt="Generic placeholder thumbnail">
                    <div class="caption">
                        <div class="pods sell-residential">
                            <div class="btnx"><a class="clean" href="/invest">Invest</a><span><i class="fa fa-chevron-right"></i></span></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="/images/thumbnail3.jpg" alt="Generic placeholder thumbnail">
                    <div class="caption">
                        <div class="pods sell-residential">
                            <div class="btnx"><a class="clean" href="/sold">Sold</a><span><i class="fa fa-chevron-right"></i></span></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="/images/thumbnail4.jpg" alt="Generic placeholder thumbnail">
                    <div class="caption">
                        <div class="pods sell-residential">
                            <div class="btnx"><a class="clean" href="/shares">Shares</a><span><i class="fa fa-chevron-right"></i></span></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>













@endsection
