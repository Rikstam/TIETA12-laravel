<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Session;
use View;
use Input;
use Validator;
use Redirect;

class QuizController extends Controller {

	public function index(){

	//$rand1 = rand(1,10);
	//$rand2 = rand(1,10);
	if (! Session::get('right_attempts') ){

		Session::put('right_attempts', 0);

	}

	if (! Session::get('wrong_attempts') ){

		Session::put('wrong_attempts', 0);

	}


	$randoms = array(rand(1,10),rand(1,10));

	Session::put('rand1', rand(1,10));
	Session::put('rand2', rand(1,10));







	return View::make('quizform');//->with('randomNumbers', $randoms );
}

public function process(){

	$data = Input::all();

	$rules = array(
		'answer'=>'numeric|required|min:1'
	);

		$validator = Validator::make($data, $rules);

		if($validator->passes()){


			if( $data['answer'] ==  ( Session::get('rand1') * Session::get('rand2') ) ){

				$right_answers =  Session::get('right_attempts');
				Session::put('right_attempts', $right_answers += 1);

				return Redirect::to('quiz')->with('rightAnswer', 'Right');
			} else{

				$wrong_answers =  Session::get('wrong_attempts');
				Session::put('wrong_attempts', $wrong_answers += 1);

				return Redirect::to('quiz')->with('wrongAnswer', 'Sorry wrong answer');


			}




		}



		return Redirect::to('quiz')->withErrors($validator);

}

public function quit(){

	$total_attempts = 1 + Session::get('right_attempts') + Session::get('wrong_attempts');
	$right_percentage = (Session::get('right_attempts') / $total_attempts) * 100;

	return View::make('quiz-results')->with('right_percentage', round($right_percentage) );
}


}
