<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Kalnoy\Nestedset\NestedSet;

class SetupBookingsAndNetworksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('networks', function(Blueprint $table)
        {
            $table->increments('id');

            NestedSet::columns($table);
            $table->enum('pos', ['lft', 'mid', 'rgt']);
            $table->integer('sponsor_id')->unsigned();

            $table->timestamps();
        });

        Schema::create('bookings', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('code')->unique();
            $table->date('date');
            $table->integer('jamaah_id')->unsigned();
            $table->integer('program_id')->unsigned();
            $table->integer('network_id')->unsigned();

            $table->timestamps();
        });

        Schema::table('bookings', function(Blueprint $table)
        {
            $table->foreign('jamaah_id')->references('id')->on('jamaah')->onDelete('cascade');
            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');
            $table->foreign('network_id')->references('id')->on('networks')->onDelete('cascade');
        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('bookings');
        Schema::drop('networks');
    }

}
