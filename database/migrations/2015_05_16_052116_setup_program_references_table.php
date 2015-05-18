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

            $table->string('name');
            $table->text('description');

            $table->timestamps();
        });

        Schema::create('services', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('name');
            $table->text('description');

            $table->timestamps();
        });

        Schema::create('program_categories', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('name');
            $table->text('description');

            $table->timestamps();
        });

        Schema::create('packages', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('name');
            $table->text('description');

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
