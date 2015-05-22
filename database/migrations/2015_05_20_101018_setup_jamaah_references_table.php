<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetupJamaahReferencesTable extends Migration {

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


        /**
         * Jamaah references table
         * Educations, heirs
         */

        Schema::create('jamaah', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('firstname');
            $table->string('lastname');
            $table->string('nickname');
            $table->enum('gender', ['male', 'female']);
            $table->string('birthplace');
            $table->date('birthdate');
            $table->enum('idcard_type', ['ktp', 'sim', 'passport']);
            $table->string('idcard_number');
            $table->string('contact');
            $table->string('email');
            $table->string('profession');
            $table->enum('education', ['sd', 'smp', 'sma', 'd1', 'd2', 'd3', 's1', 's2']);
            $table->boolean('has_umroh');
            $table->boolean('has_hajj');
            $table->enum('dress_size', ['s', 'm', 'l', 'x', 'xl', 'xxl']);

            $table->integer('address_id')->unsigned();

            $table->timestamps();
        });

        Schema::table('jamaah', function(Blueprint $table) {
            $table->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade');
        });

        Schema::create('relationships', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('name');

            $table->timestamps();
        });

        Schema::create('heirs', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('heir_firstname');
            $table->string('heir_lastname');
            $table->integer('relationship_id')->unsigned();
            $table->integer('jamaah_id')->unsigned();

            $table->timestamps();
        });

        Schema::table('heirs', function(Blueprint $table)
        {
            $table->foreign('relationship_id')->references('id')->on('relationships')->onDelete('cascade');
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
        Schema::drop('heirs');
        Schema::drop('relationships');
        Schema::drop('jamaah');
        Schema::drop('addresses');
        Schema::drop('districts');
        Schema::drop('cities');
    }


}
