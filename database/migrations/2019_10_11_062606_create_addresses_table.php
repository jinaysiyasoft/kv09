<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\SoftDeletes;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('fname');
            $table->string('lname');
            $table->string('companyname');
            $table->string('country');
            $table->string('address');
            $table->string('address1');
            $table->unsignedInteger('city_id');
            $table->unsignedInteger('state_id');
            $table->string('pincode');
            $table->unsignedInteger('addresstype_id');
            $table->softDeletes();
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
        Schema::dropIfExists('addresses');
    }
}
