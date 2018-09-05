<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('number');
            $table->timestamp('date');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
        
        $certificates = array(
            array('name' => 'certificate 1','number'=>'IOS232323','date'=>'2017-09-29','user_id'=>11),
            array('name' => 'certificate 2','number'=>'IOS454646','date'=>'2017-09-01','user_id'=>11),
            array('name' => 'certificate 3','number'=>'AIT232323','date'=>'2017-09-25','user_id'=>11),
        );
        \App\Certificate::insert($certificates);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificates');
    }
}
