<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\SoftDeletes;

class CreateBulkOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bulk_orders', function (Blueprint $table) {
              $table->increments('id');
              $table->string('name');
              $table->string('phone');
              $table->string('city');
              $table->string('email');
              $table->timestamps();
              $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bulk_orders');
    }
}
