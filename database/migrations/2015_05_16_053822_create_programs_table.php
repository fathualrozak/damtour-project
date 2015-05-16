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

            $table->string('program_name');
            $table->date('program_schedule');
            $table->integer('program_days_length');
            $table->decimal('price');
            $table->date('program_payment_before');
            $table->text('program_description');

            $table->integer('service_id')->unsigned();
            $table->integer('program_category_id')->unsigned();
            $table->integer('package_id')->unsigned();
            $table->integer('currency_id')->unsigned();

            $table->timestamps();
        });

        Schema::table('programs', function(Blueprint $table)
        {

            $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('program_category_id')->references('id')->on('program_categories');
            $table->foreign('package_id')->references('id')->on('packages');
            $table->foreign('currency_id')->references('id')->on('currencies');

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('programs', function(Blueprint $table)
        {

            $table->dropForeign('service_id');
            $table->dropForeign('program_category_id');
            $table->dropForeign('package_id');
            $table->dropForeign('currency_id');

        });

        Schema::drop('programs');
	}

}
