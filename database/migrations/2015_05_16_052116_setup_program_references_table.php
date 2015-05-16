<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetupProgramReferencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

        Schema::create('currencies', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('currency_name');
            $table->text('currency_description');

            $table->timestamps();
        });

        Schema::create('services', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('service_name');
            $table->text('service_description');

            $table->timestamps();
        });

        Schema::create('program_categories', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('category_name');
            $table->text('category_description');

            $table->timestamps();
        });

        Schema::create('packages', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('package_name');
            $table->text('package_description');

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
        Schema::drop('currencies');

        Schema::drop('services');

        Schema::drop('program_categories');

        Schema::drop('packages');

	}

}
