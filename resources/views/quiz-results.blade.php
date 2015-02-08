@extends('layouts.base')
@section('body')

<div class="row">
  <div class="large-12 columns">
    <h1>Your QuizForm Results</h1>
  </div>
</div>

<div class = "row">
  <div class="large-12 columns">
  <h2>Right answers: {{Session::get('right_attempts')}}</h2>
  </div>

  <div class="large-12 columns">
  <h2>Wrong answers: {{Session::get('wrong_attempts')}}</h2>
  </div>

  <div class="large-12 columns">
  <h2>You got {{$right_percentage}} % of right answers</h2>

  </div>

</div>





@stop
