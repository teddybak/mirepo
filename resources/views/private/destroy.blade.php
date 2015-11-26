@extends('layouts.default')
 
@section('content')


 
 {!! $idapp  !!} destroyed


{!! App\Appoitment::destroy($idapp)!!}
 

@endsection
