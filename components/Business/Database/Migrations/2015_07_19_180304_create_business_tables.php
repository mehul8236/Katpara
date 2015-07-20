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
            $table->string('region_code');
            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries');
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
            $table->foreign('user_id')->references('id')->on('users');
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
            $table->integer('country_id')->unsigned();
            $table->string('region_code');
            $table->foreign('business_id')->references('id')->on('businesses')
                  ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('country_id')->references('id')->on('countries');
        });

        // Creates the users table
        Schema::create('countries'), function($table)
        {           
            $table->integer('id')->index();
            $table->string('capital', 255)->nullable();
            $table->string('citizenship', 255)->nullable();
            $table->string('country_code', 3)->default('');
            $table->string('currency', 255)->nullable();
            $table->string('currency_code', 255)->nullable();
            $table->string('currency_sub_unit', 255)->nullable();
            $table->string('currency_symbol', 3)->nullable();
            $table->string('full_name', 255)->nullable();
            $table->string('iso_3166_2', 2)->default('');
            $table->string('iso_3166_3', 3)->default('');
            $table->string('name', 255)->default('');
            $table->string('region_code', 3)->default('');
            $table->string('sub_region_code', 3)->default('');
            $table->boolean('eea')->default(0);
            $table->string('calling_code', 3)->nullable();
            $table->string('flag', 6)->nullable();
            
            $table->primary('id');
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
        Schema::dropIfExists('countries'));
    }

}
