@extends('layouts.default')

@section('content')



<!-- Page Content -->
<div class="container">

   <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

         <h1 class="page-header">
            Price Lookup
         </h1>

         <!-- First Blog Post -->
         <h2>
            <a href="#">Search price estimates for any property in London</a>
         </h2>


         <hr>
         <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="900" height="300" src="https://maps.google.com/maps?hl=en&q=london&ie=UTF8&t=hybrid&z=11&iwloc=B&output=embed"><div><small><a href="http://embedgooglemaps.com">embedgooglemaps.com</a></small></div>
            <div> </div></iframe>
         <hr>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
         <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

         <hr>


      </div>



   </div>
   <!-- /.row -->





</div>



@stop