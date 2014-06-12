@extends('layout')

@section('content')
 
  <div class='container'>

<h2><marquee><font color=red><b>Selamat Datang Di Dunia Pertama "Laravel"<b></font></marquee></h2>
<h3>Masukan Buku Baru</h3>

 {{ Form::open(array('action' => 'BookController@store')) }}
  
 {{Form::label('title', 'Title') }}

 {{Form::text('title', '', array('class' => 'form-control'))}}

 {{Form::label('author', 'Author') }}

 {{Form::text('author', '', array('class' => 'form-control'))}}

 {{Form::label('description', 'Description') }}

 {{Form::textarea('description', '', array('class' => 'form-control'))}}

 {{Form::label('price', 'Price') }}

 {{Form::text('price', '', array('class' => 'form-control'))}}
<br>
 {{Form::submit('Submit', array('class' => 'btn btn-primary')) }}

 {{ Form::close() }}

 </div>
@stop