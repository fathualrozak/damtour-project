<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('programs', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('name');
            $table->date('schedule')->nullable();
            $table->integer('days_length')->nullable();
            $table->double('price');
            $table->enum('down_payment_type', ['fixed', 'percentage']);
            $table->double('down_payment');
            $table->date('payment_before')->nullable();
            $table->text('description')->nullable();

            $table->integer('service_id')->unsigned();
            $table->integer('program_category_id')->unsigned();
            $table->integer('package_id')->unsigned()->nullable();
            $table->integer('currency_id')->unsigned();

            $table->timestamps();
        });

        Schema::table('programs', function(Blueprint $table)
        {

            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            $table->foreign('program_category_id')->references('id')->on('program_categories')->onDelete('cascade');
            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade');
            $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('cascade');

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('programs');
	}

}
