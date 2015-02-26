@extends('layouts.base')
@section('body')

<div class="row">
  <div class="large-12 columns">
    <h1>User: {{$user['name']}}</h1>
    <hr>
  </div>
</div>


<div class = "row">

  <div class="large-12 columns">



  </div>
</div>

@if (Session::has('notice'))
<div class ="large-12 columns">
<div data-alert class="alert-box success radius">
{{Session::get('notice')}}
<a href="#" class="close">&times;</a>
</div>
</div>
@endif

@stop
