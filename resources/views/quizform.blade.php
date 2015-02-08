@extends('layouts.base')
@section('body')

<div class="row">
  <div class="large-12 columns">
    <h1>QuizForm</h1>
  </div>
</div>


<div class = "row">

  <div class="large-12 columns">

    <div class ="row">
      {!! Form::open(array('url'=>'quiz/process'))  !!}



      <div class ="large-6 columns">
        <h2>How much is {!! Session::get('rand1')  !!}  * {!! Session::get('rand2')  !!}  </h2>


          {!! Form::label('answer','Answer')  !!}
          {!! Form::input('number', 'answer','') !!}
      </div>






          <div class = "large-12 columns">
              <div class ="row">
            <div class ="large-2 columns">
              {!! Form::button( '<i class="fa fa-repeat"></i> Answer', array('type'=>'submit','id'=> 'answerButton','class'=>'button') )  !!}
            </div>

            <div class ="large-10 columns">
              <a  class = "button info" href = "quiz/quit">Quit</a>
            </div>
          </div>


      </div>
      {!! Form::close()  !!}

    </div>

  </div>

</div>

<div class = "row">
  @foreach($errors->all() as $message)
  <div class ="large-12 columns">
  <div data-alert class="alert-box alert radius ">
    {!! $message  !!}
    <a href="#" class="close">&times;</a>
  </div>
</div>
  @endforeach


  @if (Session::has('wrongAnswer'))
  <div class ="large-12 columns">
  <div data-alert class="alert-box warning radius">
  {!! Session::get('wrongAnswer')  !!}
  <a href="#" class="close">&times;</a>
  </div>
  </div>
  @endif

  @if (Session::has('rightAnswer'))
  <div class ="large-12 columns">
  <div data-alert class="alert-box success radius">
  {!! Session::get('rightAnswer')  !!}
  <a href="#" class="close">&times;</a>
</div>
  </div>
  @endif

</div>


@stop
