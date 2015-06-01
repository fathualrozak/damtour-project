<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('invoice_types', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('code');
            $table->string('name');
            $table->timestamps();
        });
		Schema::create('invoices', function(Blueprint $table)
		{
			$table->increments('id');

            $table->string('code');
            $table->date('date');

            $table->integer('invoice_type_id')->unsigned();
            $table->integer('booking_id')->unsigned();
            $table->integer('jamaah_id')->unsigned();

			$table->timestamps();
		});

        Schema::table('invoices', function(Blueprint $table)
        {
            $table->foreign('invoice_type_id')->references('id')->on('invoice_types')->onDelete('cascade');
            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');
            $table->foreign('jamaah_id')->references('id')->on('jamaah')->onDelete('cascade');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('invoices');
		Schema::drop('invoice_types');
	}

}
