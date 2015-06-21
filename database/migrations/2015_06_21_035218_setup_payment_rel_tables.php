<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class SetupPaymentRelTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payers', function(Blueprint $table){
            $table->increments('id');

            $table->string('name');
            $table->string('contact');

            $table->timestamps();
        });

        Schema::create('payment_methods', function(Blueprint $table){
            $table->increments('id');

            $table->string('code');
            $table->string('name');

            $table->timestamps();
        });

        Schema::create('payment_status', function(Blueprint $table){
            $table->increments('id');

            $table->string('code');
            $table->string('name');

            $table->timestamps();
        });

        Schema::create('payments', function(Blueprint $table){
            $table->increments('id');

            $table->date('date');
            $table->double('amount');

            $table->integer('invoice_id')->unsigned();
            $table->integer('payer_id')->unsigned();
            $table->integer('currency_id')->unsigned();
            $table->integer('payment_method_id')->unsigned();
            $table->integer('payment_status_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->timestamps();
        });

        Schema::table('payments', function(Blueprint $table)
        {
            $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('cascade');
            $table->foreign('payer_id')->references('id')->on('payers')->onDelete('cascade');
            $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('cascade');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods')->onDelete('cascade');
            $table->foreign('payment_status_id')->references('id')->on('payment_status')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('payments');
        Schema::drop('payment_status');
        Schema::drop('payment_methods');
        Schema::drop('payers');
	}

}
