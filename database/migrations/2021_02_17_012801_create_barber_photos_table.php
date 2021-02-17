<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarberPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barber_photos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('barber_id');
            $table->string('url');
            $table->timestamps();

            $table->foreign('barber_id')->references('id')->on('barbers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barber_photos');
    }
}
