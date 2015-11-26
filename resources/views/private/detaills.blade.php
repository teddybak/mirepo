@extends('layouts.default')

@section('content')

<h4>Select day and time to make booking</h4>
<div class="row"> 
    
    {!! Form::open(array('action' => 'PrivateController@store')) !!}
    
        {!! Form::hidden('asset_id', $idasset, array('id' => 'invisible_id')) !!}
        {!! Form::hidden('user_id', $iduser, array('id' => 'invisible_id')) !!}
    <div class="col-lg-4">
        <table class="table table-striped">

            <tr><td>Select Day</td><td> {!!  Form::text('date', null, array('type' => 'text', 'class' => 'form-control datepicker','placeholder' => 'Pick the date this task should be completed', 'id' => 'calendar','required' => 'required')) !!}                </td></tr>


            <tr><td>Select Time</td><td>{!!  Form::input('date', 'time', null, ['class' => 'form-control', 'placeholder' => 'Date']) !!}  </td></tr>




            <tr><td>Type Your Reference</td><td> {!!  Form::input('reference', 'reference', null, ['size' => 50,'class' =>'form-control']) !!} </td></tr>



            <tr><td> {!! Form::submit('Send') !!} </td></tr>

        </table>

    </div>

{!! Form::close() !!}  

</div> 
 <script type="text/javascript">
     Date.format = 'yyyy/mm/dd';
$(document).ready(function() {
    $('#calendar').datepicker({ dateFormat: 'yy-mm-dd' }); 
}); 
</script>
 
@stop