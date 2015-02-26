@extends('layouts.base')
@section('body')

<div class="row">
  <div class="large-12 columns">
    <h1>Create an account</h1>
    <hr>
  </div>
</div>


<div class = "row">

  <div class="large-12 columns">

    {!! Form::open(['url' => 'accounts']) !!}

    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'account-name']) !!}

    {!! Form::label('code', 'Account code:') !!}

    {!! Form::text('code', null, ['class' => 'account-code']) !!}


    {!! Form::submit('Create Account', ['class' => 'button success']) !!}

    {!! Form::close() !!}

  </div>
</div>

<div class = "row">
  @foreach($errors->all() as $message)
  <div class ="large-12 columns">
  <div data-alert class="alert-box alert radius ">
    {{$message}}
    <a href="#" class="close">&times;</a>
  </div>
  @endforeach

</div>

@stop
