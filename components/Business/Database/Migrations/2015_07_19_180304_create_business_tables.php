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
            $table->longText('description');
        });

        // create table to store business address
        Schema::create('addresses', function(Blueprint $table){ 
            $table->increments('id');
            $table->string('street1');
            $table->string('street2');
            $table->string('city');
            $table->string('region');
            $table->string('postalcode');
            $table->string('country');
            $table->string('country_code');
            $table->string('region_code');
        });

        // create table to store business informations
        Schema::create('businesses', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('field_id')->unsigned();
            $table->integer('address_id')->unsigned();
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
            $table->foreign('address_id')->references('id')->on('addresses')
                  ->onUpdate('cascade')->onDelete('cascade');
        });
        
        // create table to store business locations
        Schema::create('locations', function(Blueprint $table){ 
            $table->increments('id');
            $table->integer('business_id')->unsigned();
            $table->string('name');
            $table->longText('description');
            $table->string('street1');
            $table->string('street2');
            $table->string('city');
            $table->string('region');
            $table->string('postalcode');
            $table->string('country');
            $table->string('country_code');
            $table->string('region_code');
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
        Schema::dropIfExists('addresses');
        Schema::dropIfExists('fields');
    }

}
