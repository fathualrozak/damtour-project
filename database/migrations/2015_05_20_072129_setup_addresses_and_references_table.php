<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetupAddressesAndReferencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('cities', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('name');

            $table->timestamps();
        });

        Schema::create('districts', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('name');

            $table->timestamps();
        });

        Schema::create('addresses', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('line1');
            $table->string('line2');

            $table->integer('district_id')->unsigned();
            $table->integer('city_id')->unsigned();

            $table->timestamps();
        });

        Schema::table('addresses', function(Blueprint $table)
        {
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('addresses');
        Schema::drop('districts');
        Schema::drop('cities');
	}

}
