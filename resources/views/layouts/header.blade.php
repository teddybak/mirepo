<nav class="navbar">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Home</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                    <ul class="dropdown-menu">

                        <li><a href="/rent">For Rent</a></li>
                        <li><a href="/sold">For Sale</a></li>
                        <li><a href="invest">Invest</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/shares">Shares</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Mortgage Calculation</a></li>
                    </ul>
                </li>
            </ul>
            {!! Form::open(array('action' => 'AssetsController@search','class' =>'navbar-form navbar-left')) !!}
            <div class="input-group">
                <input type="text" class="form-control"/>
                <span class="input-group-addon">
                 <i class="fa fa-search"></i>
                 </span>
            </div>

            <div class="form-group">
                {!! Form::submit('Search..!',array('class'=>'btn btn-primary')) !!}
                @if(Auth::check())
                    <span class="text-primary  text-left"><b class="clean">{!! Auth::user()->name !!}</b> <span class="glyphicon glyphicon-user clean"></span></span>
                @endif
            </div>
            {!! Form::close() !!}


            <ul class="nav navbar-nav pull-right">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Options <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @if(!Auth::check())
                            <li><a href="/auth/login">Login</a></li>
                            <li><a href="/auth/register">Register</a></li>
                        @else
                            <li><a href="/home">Your appoitments</a></li>
                            <li><a href="/auth/logout">Logout</a></li>
                        @endif
                    </ul>
                </li>
            </ul>


            <ul class="nav navbar-nav   pull-right">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Search <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/principal">Search</a></li>
                        <li><a href="/gmapsearch">Geo Search</a></li>
                        <li><a href="/prices">Compare  Prices</a></li>
                        <li role="separator" class="divider"></li>

                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

