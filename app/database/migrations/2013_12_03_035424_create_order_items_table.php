<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_items', function(Blueprint $table) {
			$table->integer('order_id')->unsigned();
			$table->string('product');
			$table->integer('amount')->unsigned();
			$table->float('unit_price');
			$table->float('price');
			$table->float('tax');
			$table->string('tax_name');
			$table->float('discount');
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
		Schema::drop('order_items');
	}

}
