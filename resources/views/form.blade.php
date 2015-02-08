@extends('layouts.base')
@section('body')

<div class="row">
  <div class="large-12 columns">
    <h1>Form test</h1>
  </div>
</div>



<div class = "row">

  <div class="large-12 columns">

    <div class ="row">
      {!! Form::open(array('url'=>'process'))!!}



      <div class ="large-6 columns">
        <h2>From Account</h2>
        {!! Form::label('account_from','From account') !!}
     {!! Form::select('account_from', $accounts) !!}
      </div>


      <div class ="large-6 columns">
        <h2>To account</h2>
        {!! Form::label('account_to','To account') !!}
    {!! Form::select('account_to', $accounts) !!}
      </div>

      <div class ="large-6 columns">

        {!! Form::label('sum','Sum') !!}
        {!! Form::input('number','sum','xxxx.xx') !!}
      </div>

      <div class ="large-12 columns">
      {!! Form::button( '<i class="fa fa-repeat"></i> Transfer', array('type'=>'submit','id'=> 'transferButton','class'=>'button') ) !!}
      </div>
      {!! Form::close() !!}

    </div>

  </div>

</div>

<div class = "row">
  @foreach($errors->all() as $message)
  <div class ="large-12 columns">
  <div data-alert class="alert-box alert radius ">
    {{$message}}
    <a href="#" class="close">&times;</a>
  </div>
</div>
  @endforeach


  @if (Session::has('warning'))
  <div class ="large-12 columns">
  <div data-alert class="alert-box alert radius">
  {{Session::get('warning')}}
  <a href="#" class="close">&times;</a>
  </div>
  </div>
  @endif

  @if (Session::has('notice'))
  <div class ="large-12 columns">
  <div data-alert class="alert-box success radius">
  {{Session::get('notice')}}
  <a href="#" class="close">&times;</a>
</div>
  </div>
  @endif

</div>

@stop
