<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualifications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('institute');
            $table->string('degree');
            $table->datetime('from_date');
            $table->datetime('to_date');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
        $qualifications = array(
            array('institute' => 'AIMM 1','degree'=>'BCS','from_date'=>'2017-09-29','to_date'=>'2018-06-30','user_id'=>11),
            array('institute' => 'AIMM 2','degree'=>'MSC','from_date'=>'2017-09-01','to_date'=>'2018-06-30','user_id'=>11),
            array('institute' => 'AIMM 3','degree'=>'MBBS','from_date'=>'2017-09-25','to_date'=>'2018-06-30','user_id'=>11),
        );
        \App\Qualification::insert($qualifications);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qualifications');
    }
}
