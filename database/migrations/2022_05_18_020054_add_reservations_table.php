<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table){
            $table->id('reservation_id');
            $table->string('name');
            $table->string('event');
            $table->string('contact');
            $table->date('request_date');
            $table->integer('guests')->nullable();
            $table->longText('venue')->nullable();
            $table->longText('requests')->nullable();
            $table->date('assign_date')->nullable();
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
};
