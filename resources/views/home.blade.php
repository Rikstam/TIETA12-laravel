@extends('layouts.base')
@section('body')

	<div class="row">
		<div class="large-12 columns">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div>
					You are logged in!
				</div>
			</div>
		</div>
	</div>


	<div class = "row">
	<div class = "large-12 columns">
	<h2>Your info {{ $user->name }}</h2>

	</div>


	</div>

@stop
