<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('type', ['wholesaler', 'retailer'])->default('retailer');
            $table->boolean('status')->nullable()->default(false);
            $table->integer('user_id')->unsigned();
            $table->string('name', 250);
            $table->string('phoneno', 10)->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('city', 120)->nullable();
            $table->string('state', 120)->nullable();
            $table->string('zip_code', 5)->nullable();
            $table->string('country', 120)->nullable()->default('thailand');
            $table->double('lat')->nullable();
            $table->double('lng')->nullable();
            $table->integer('businesstype_id')->unsigned()->nullable();
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
        Schema::dropIfExists('stores');
    }
}
