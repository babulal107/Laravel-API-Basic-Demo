<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('mobile');
            $table->date('date_of_birth');
            $table->enum('gender',['M','F','O'])->default('M')->comment("M=>Male,F=>Female,O=>Other");
            $table->string('password');
            $table->string('stripe_id')->nullable();
            $table->unsignedInteger('clinic_id')->nullable();
            $table->enum('user_type', ['D', 'P','A','C'])->default('P')->comment("D => Doctor, P=> Patient, A=> Admin, C=> Clinic");
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
