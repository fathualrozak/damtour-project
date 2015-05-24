<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetupInvoicesAndReferencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('invoices', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create('invoice_types', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('code');
            $table->string('name');

            $table->timestamps();
        });

        Schema::create('invoice_lines', function(Blueprint $table)
        {
            $table->increments('id');

            $table->integer('invoice_type_id')->unsigned();
            $table->integer('invoice_id')->unsigned();
            $table->integer('booking_id')->unsigned();

            $table->timestamps();
        });

        Schema::table('invoice_lines', function(Blueprint $table)
        {
            $table->foreign('invoice_type_id')->references('id')->on('invoice_types')->onDelete('cascade');
            $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('cascade');
            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('invoice_lines');
        Schema::drop('invoice_types');
        Schema::drop('invoices');
    }

}
