<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubscriptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subscriptions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('name');
			$table->string('braintree_id');
			$table->string('braintree_plan');
			$table->integer('quantity');
			$table->dateTime('trial_ends_at')->nullable();
			$table->dateTime('ends_at')->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('subscriptions');
	}

}
