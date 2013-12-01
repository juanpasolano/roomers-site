<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id');

			$table->float('cart_total');
			$table->float('taxes_total');
			$table->float('bruto_total');
			$table->float('grand_total');

			$table->string('payment');
			$table->string('status');
			$table->string('paypal');

			$table->string('firstname');
			$table->string('lastname');
			$table->string('phone');

			$table->float('shipping_value');
			$table->string('shipping_type');
			$table->string('street');
			$table->string('suburb');
			$table->string('postcode');
			$table->string('city');
			$table->string('state');
			$table->string('country');
			$table->string('zone');

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
		Schema::drop('orders');
	}

}
