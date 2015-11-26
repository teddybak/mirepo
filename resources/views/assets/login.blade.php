@extends('layouts.default')

@section('content')
    <div class="form-group">
    {!! Form::open(array('route' => 'auth.login','action'=>'post'))  !!}
    {!! Form::email('email',null,['class' => 'form-control']) !!}
    {!! Form::password('password') !!}
    {!! Form::submit('Sign in')  !!}
    {!! Form::close()  !!}
    </div>


    {!! Form::open(array('url' => 'login'))!!}
    <h1>Login</h1>
@stop