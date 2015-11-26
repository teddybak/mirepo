@extends('layouts.default')

@section('content')


    @if(count($result) > 0)

    <h3>Your Appoitments</h3>

    <table class="table table-striped">

        <thead>
        <th class="text-center">Reference</th>
        <th class="text-center">Location</th>
        <th class="text-center">Type</th>
        <th class="text-center">Date and Time</th>
        <th class="text-left">Your Reference</th>
        <th class="text-center">Action</th>

        </thead>

        <tbody>
        @foreach($result as $resultx)

        <tr>
            <td class="text-center"><a href="/show/{!! $resultx ['id'] !!}">{!! $resultx ['id'] !!}</a> </td >
            <td class="text-center">{!! $resultx ['location'] !!}</td>
            <td class="text-center">{!! $resultx ['type'] !!}</td>
            <td class="text-center">{!! $resultx ['date'] !!}</td>

            <td>{!! $resultx ['comment'] !!}</td>
            <td class="text-center">
                <a href="/clean/{!! $resultx ['idapp'] !!}" class="btn btn-info " role="button">Delete</a>
                <a href="#" class="btn btn-info " role="button">Modify</a>
            </td>
        </tr>

        @endforeach
        </tbody>
    </table>

    @else

            <h1>You dont have any appoitments</h1>


    @endif

@stop