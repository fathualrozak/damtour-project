<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetupItemsAndRelatedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('items', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('name');
            $table->decimal('price');
            $table->text('description');

            $table->integer('currency_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('items', function(Blueprint $table)
        {
            $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('cascade');
        });

        Schema::create('additional_item', function(Blueprint $table)
        {
            $table->integer('booking_id')->unsigned();
            $table->integer('item_id')->unsigned();

            $table->timestamps();
        });

        Schema::table('additional_item', function(Blueprint $table)
        {
            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('additional_item');
        Schema::drop('items');
	}

}
