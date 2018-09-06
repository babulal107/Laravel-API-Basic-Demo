<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppoinmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appoinments', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type',['N','U'])->default('N')->comment("N=>Normal, U=>Urgent");
            $table->datetime('app_time');
            $table->string('time_slot');
            $table->double('fees');
            $table->enum('status', ['PR', 'DA','PA','DR','C'])->default('PR')->comment("PR => Patient Requested, DA=> Doctor Accepted, PA=> Patient Accepted, DR=> Doctor Rejected, C=>Completed");
            $table->dateTime('qr_scan_time');
            $table->dateTime('completion_time');
            $table->float('rating');
            $table->bigInteger('reviews');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('doctor_id');
            $table->foreign('doctor_id')->references('id')->on('users');
            $table->unsignedInteger('clinic_id');
            $table->foreign('clinic_id')->references('id')->on('users');
            $table->unsignedInteger('appoinmentable_id');
            $table->string('appoinmentable_type');
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
        Schema::dropIfExists('appoinments');
    }
}
