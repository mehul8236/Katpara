<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessTables extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();

        // create table to store business fields
        Schema::create('fields', function(Blueprint $table){ 
            $table->increments('id');
            $table->string('name');
            $table->string('label');
            $table->longText('description')->nullable();
        });

        // Create table to store countries
        Schema::create('countries', function($table)
        {           
            $table->increments('id');
            $table->string('country_code', 3)->default('');
            $table->string('currency', 255)->nullable();
            $table->string('currency_code', 255)->nullable();
            $table->string('currency_symbol', 3)->nullable();
            $table->string('full_name', 255)->nullable();
            $table->string('iso_3166_2', 2)->default('');
            $table->string('iso_3166_3', 3)->default('');
            $table->string('name', 255)->default('');
            $table->string('calling_code', 3)->nullable();
            $table->string('flag', 6)->nullable();
        });

        // create table to store states
        Schema::create('states', function($table)
        {           
            $table->increments('id');
            $table->integer('country_id')->unsigned();
            $table->string('region_code');
            $table->string('name', 255);
            $table->foreign('country_id')->references('id')->on('countries')
                  ->onUpdate('cascade')->onDelete('cascade');
        });

        // create table to store business informations
        Schema::create('businesses', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('field_id')->unsigned();
            $table->string('name');
            $table->longText('description')->nullable();
            $table->time('open')->nullable();
            $table->time('close')->nullable();
            $table->string('phone',15);
            $table->string('email');
            $table->string('logo')->nullable();
            $table->string('dir');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')
                  ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('field_id')->references('id')->on('fields');
        });

        // create table to store business locations
        Schema::create('locations', function(Blueprint $table){ 
            $table->increments('id');
            $table->integer('business_id')->unsigned();
            $table->string('name');
            $table->longText('description')->nullable();
            $table->enum('type', ['default', 'location']);
            $table->string('street1');
            $table->string('street2')->nullable();
            $table->string('city');
            $table->string('postalcode');
            $table->integer('region_id')->unsigned();
            $table->integer('country_id')->unsigned();
            $table->timestamps();
            $table->foreign('region_id')->references('id')->on('states');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('business_id')->references('id')->on('businesses')
                  ->onUpdate('cascade')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
        Schema::dropIfExists('businesses');
        Schema::dropIfExists('states');
        Schema::dropIfExists('countries');
        Schema::dropIfExists('fields');
    }

}
