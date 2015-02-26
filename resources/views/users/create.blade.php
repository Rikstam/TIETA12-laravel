@extends('layouts.base')
@section('body')

<div class="row">
  <div class="large-12 columns">
    <h1>Register</h1>
    <hr>
  </div>
</div>


<div class = "row">

  <div class="large-12 columns">

    {!! Form::open(['url' => 'users']) !!}

    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'name']) !!}

    {!! Form::label('email', 'Email:') !!}

    {!! Form::text('email', null, ['class' => 'email']) !!}


    {!! Form::label('password', 'Password:') !!}

    {!! Form::text('password', null, ['class' => 'password']) !!}


    {!! Form::label('password_confirmation', 'Password again:') !!}

    {!! Form::text('password_confirmation', null, ['class' => 'password_confirmation']) !!}


    {!! Form::submit('Sign up', ['class' => 'button success']) !!}

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
