<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('accounts', function($table)
{
		$table->increments('id');
		$table->decimal('amount',9,2);
		$table->string('code', 12);
		$table->string('name', 255);
		$table->timestamps();
		$table->softDeletes();

});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
