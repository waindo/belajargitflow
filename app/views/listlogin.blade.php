@extends('layout')

@section('content')
<!-- LIST DATA ANDA -->
<section class="container">
 <table class="table">
    <tr>
       <th>Username</th>
       <th>Password</th>
    </tr>
    @foreach($logindata as $login)
      <tr>
         <td>{{ $login->username}}</td>
         <td>{{ $login->password}}</td>
      </tr>
    @endforeach
 </table>
</section>
@stop