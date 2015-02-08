<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Account;
use View;
use Input;
use Validator;
use Redirect;

class AccountsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$accounts_data = Account::all();

		$balances = array();
		$accounts = array();

	foreach ($accounts_data as $a){
		$balances[$a->id] = $a->amount;
		$accounts[$a->id] = $a->code . " " . $a->amount . "&euro;";

	}

	//$balances = array('account_1_balance'=>500, 'account_2_balance' => 10);

	$data = array('accounts' => $accounts, 'balances' => $balances );
//var_dump($data);
	return View::make('form', $data);
	}

	public function transfer()
	{

		//echo "in the account controller";

		$data = Input::all();

		$rules = array(
			'sum'=>'numeric|required|min:0.05',
			'account_from' => 'required|different:account_to'

			);

		$validator = Validator::make($data, $rules);

		if($validator->passes()){


			var_dump($data);

			$notices = array("Everything went well");

			$sum_to_transfer = $data['sum'];

			$account_from = Account::find($data['account_from']);
			$account_from_balance = $account_from->amount;
			$account_from->amount = $account_from_balance - $sum_to_transfer;

			if ($account_from_balance < $sum_to_transfer){
				return Redirect::to('form')->with('warning', 'Your account doesnt have enough money' );

			}

			$account_from->save();

			$account_to = Account::find($data['account_to']);

			$account_to_balance = $account_to->amount;
			$account_to->amount = $account_to_balance + $sum_to_transfer;

			$account_to->save();


			return Redirect::to('form')->with('notice', 'Everything went well' );
		}

		//$errors = $validator->messages();

		return Redirect::to('form')->withErrors($validator);


		//var_dump(Input::all());

		//return View::make('hello')->with('numbers', $sum);
	}




	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
