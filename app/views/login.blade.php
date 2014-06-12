@extends('layout')

@section('content')

<div class='container'>

<h3> SILAHKAN REGISTRASI DISINI <h3>

 {{ Form::open(array('action' => 'LoginController@store'))}}
    
 {{Form::label('username','Username')}}
 
 {{Form::text('username','',array('class' => 'form-control'))}}
 
{{Form::label('password','Password')}}

{{Form::text('password','',array('class' => 'form-control'))}}

 <br>
 {{Form::submit('Submit', array('class' => 'btn btn-primary'))}}
 
{{ Form::close() }}

</div>

@stop


