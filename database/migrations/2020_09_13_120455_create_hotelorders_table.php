<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotelorders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_customer')->nullable;
            $table->unsignedBigInteger('id_hotel')->nullable;
            $table->timestamps();

            $table->foreign('id_customer')->references('id')->on('customers');
             $table->foreign('id_hotel')->references('id')->on('hotels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotelorders');
    }
}
