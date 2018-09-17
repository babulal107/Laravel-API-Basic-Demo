<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); 
            $table->enum('is_active',['0','1'])->default('1')->comment("0=>in_active, 1=>active");
            $table->unsignedInteger('speciality_id');
            $table->timestamps();
            $table->foreign('speciality_id')->references('id')->on('specialities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
