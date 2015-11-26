<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $page_title or "System Admin" }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset("/bower_components/admin-lte/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet"
          type="text/css"/>
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
    <!-- Theme style -->
    <link href="{{ asset("/bower_components/admin-lte/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css"/>
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="{{ asset("/bower_components/admin-lte/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet"
          type="text/css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-blue">
<div class="wrapper">

    <!-- Header -->
    @include('private.header')

            <!-- Sidebar -->
    @include('private.sidebar')

            <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h3 class="text-left">
                {{ $page_title or "Add new Assets" }}
                <small>{{ $page_description or null }}</small>
            </h3>
            <!-- You can dynamically generate breadcrumbs here -->
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->


            @yield('content')

            <div class="row">

                <div class="col-md-4">
                    <?php
                    $asset_type = \App\AssetType::lists('type', 'type');
                    $location = \App\Location::lists('location', 'location');
                    ?>

                    {!! Form::open(array('action' => 'AdminController@storeasset','files'=>true)) !!}


                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="form-group">
                                {!! Form::label('Asset Type') !!}
                                {!!  Form::select('asset_type', $asset_type) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('Asset Location') !!}
                                {!!  Form::select('location', $location) !!}
                            </div>


                            <div class="form-group">
                                {!! Form::label('Price') !!}
                                {!! Form::text('price', null, array('placeholder'=>'Insert Price')) !!}
                            </div>


                            <div class="form-group">
                                {!! Form::label('size') !!}
                                {!! Form::text('size', null, ['size' => '30x3']) !!}
                            </div>





                            <div class="form-group">
                                {!! Form::label('Product Image') !!}
                                {!! Form::file('image') !!}
                            </div>

                            <div class="form-group">
                                {!! Form::submit('Add new asset',array('class'=>'btn btn-primary btn-block')) !!}
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                    <div class="form-group">
                        {!! Form::label('Long') !!}
                        {!! Form::text('longitude', null, array('placeholder'=>'Insert longitude')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Lat') !!}
                        {!! Form::text('latitude', null, array('placeholder'=>'Insert latitude')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('post code') !!}
                        {!! Form::text('pcode', null, ['size' => '30x3']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Description') !!}
                        {!! Form::textarea('description', null, ['size' => '30x6']) !!}
                    </div>
</div>
</div>
                </div>

                {!! Form::close() !!}




    </div>



    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<!-- Footer -->
@include('private.footer')

</div><!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.3 -->
<script src="{{ asset ("/bower_components/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js") }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ("/bower_components/admin-lte/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset ("/bower_components/admin-lte/dist/js/app.min.js") }}" type="text/javascript"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience -->
</body>
</html>





































