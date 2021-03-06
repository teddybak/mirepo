@extends('layouts.default')

@section('content')


<!-- Page Content -->
<div class="container">

   <div class="row">

      <div class="col-md-3">
         <p class="lead">Select Area</p>
         <div class="list-group">
            <a href="#" class="list-group-item">Area 1</a>
            <a href="#" class="list-group-item">Area 2</a>
            <a href="#" class="list-group-item">Area 3</a>
         </div>
      </div>

      <div class="col-md-9">

         <div class="row carousel-holder">

            <div class="col-md-12">
               <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                     <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                     <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="item active">
                        <img class="slide-image" src=" /images/banner.jpg" alt="">
                     </div>
                     <div class="item">
                        <img class="slide-image" src="/images/banner2.gif" alt="">
                     </div>
                     <div class="item">
                        <img class="slide-image" src="/images/banner3.jpg" alt="">
                     </div>
                  </div>
                  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                     <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                     <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
               </div>
            </div>

         </div>

         <div class="row">

            <div class="col-sm-4 col-lg-4 col-md-4">
               <div class="thumbnail">
                  <img src="/images/small-1.jpg" alt="">
                  <div class="caption">
                     <h4 class="pull-right">&pound; 24.99</h4>
                     <h4><a href="#">First Product</a>
                     </h4>
                     <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                  </div>
                  <div class="ratings">
                     <p class="pull-right">15 reviews</p>
                     <p>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                     </p>
                  </div>
               </div>
            </div>

            <div class="col-sm-4 col-lg-4 col-md-4">
               <div class="thumbnail">
                  <img src="/images/small-2.jpg" alt="">
                  <div class="caption">
                     <h4 class="pull-right">&pound; 64.99</h4>
                     <h4><a href="#">Second Product</a>
                     </h4>
                     <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                  <div class="ratings">
                     <p class="pull-right">12 reviews</p>
                     <p>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                     </p>
                  </div>
               </div>
            </div>

            <div class="col-sm-4 col-lg-4 col-md-4">
               <div class="thumbnail">
                  <img src="/images/small-3.jpg" alt="">
                  <div class="caption">
                     <h4 class="pull-right">&pound; 74.99</h4>
                     <h4><a href="#">Third Product</a>
                     </h4>
                     <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                  <div class="ratings">
                     <p class="pull-right">31 reviews</p>
                     <p>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                     </p>
                  </div>
               </div>
            </div>



      </div>

   </div>

</div>






@stop