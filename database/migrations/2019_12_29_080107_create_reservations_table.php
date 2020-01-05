<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->dateTime('checkin')->nullable(true);
            $table->dateTime('checkout')->nullable(true);
            $table->dateTime('book_start')->nullable(true);
            $table->dateTime('book_end')->nullable(true);
            $table->dateTime('cancel')->nullable(true);
            $table->unsignedInteger('discount')->nullable(true);
            $table->unsignedInteger('total');
            $table->text('need')->nullable(true);
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
        Schema::dropIfExists('reservations');
    }
}
