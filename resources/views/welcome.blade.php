@extends('layouts.default')

@section('content')



    <div id="mycarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <img src="/images/index_hero_bg.jpg" alt="" class="img-responsive">

                <div class="carousel-caption">
                    <h1 class="text-left">Looking to buy or rent a house? </h1>
                    <h1 class="text-left">In just 3 simples steps </h1>
                </div>
            </div>
        </div>
    </div>

<br>
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

    {{--<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">--}}
    {{--<!-- Indicators -->--}}
    {{--<ol class="carousel-indicators">--}}
    {{--<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>--}}
    {{--<li data-target="#carousel-example-generic" data-slide-to="1"></li>--}}
    {{--<li data-target="#carousel-example-generic" data-slide-to="2"></li>--}}
    {{--</ol>--}}

    {{--<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">--}}
    {{--<!-- Indicators -->--}}
    {{--<ol class="carousel-indicators">--}}
    {{--<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>--}}
    {{--<li data-target="#carousel-example-generic" data-slide-to="1"></li>--}}
    {{--<li data-target="#carousel-example-generic" data-slide-to="2"></li>--}}
    {{--</ol>--}}

    {{--<!-- Wrapper for slides -->--}}
    {{--<div class="carousel-inner">--}}
    {{--<div class="item active">--}}
    {{--<img src="/images/front-page-1.jpg" alt="...">--}}

    {{--<div class="carousel-caption">--}}
    {{--<h1>Bienvenidos Novo Casa</h1>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="item">--}}
    {{--<img src="/images/front-page-2.jpg" alt="...">--}}

    {{--<div class="carousel-caption">--}}
    {{--<h1>Bienvenidos Novo Casa</h1>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="item">--}}
    {{--<img src="/images/front-page-3.jpg" alt="...">--}}

    {{--<div class="carousel-caption">--}}
    {{--<h1>Bienvenidos Novo Casa</h1>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<!-- Controls -->--}}
    {{--<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">--}}
    {{--<span class="glyphicon glyphicon-chevron-left"></span>--}}
    {{--</a>--}}
    {{--<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">--}}
    {{--<span class="glyphicon glyphicon-chevron-right"></span>--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--<!-- Carousel -->--}}

@endsection




