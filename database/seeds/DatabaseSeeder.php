<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');

		$this->call('AccountTableSeeder');
	}

}

class AccountTableSeeder extends Seeder {

	public function run()
	{
		DB::table('accounts')->delete();

				Account::create(array('amount' => 99999, 'code'=> 'FI43534-4554'));
				Account::create(array('amount' => 1, 'code'=> 'FI5555-5555'));

	}
}
