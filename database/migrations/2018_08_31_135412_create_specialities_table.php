<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecialitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); 
            $table->enum('is_active',['0','1'])->default('1')->comment("0=>in_active, 1=>active"); 
        });
        
        $specilities = array(
            array('id'=>1,'name' => 'General Surgery'),
            array('id'=>2,'name' => 'Transplant Surgery'),
            array('id'=>3,'name' => 'Orthopedic Surgery'),
            array('id'=>4,'name' => 'Neuro Surgery'),
            array('id'=>5,'name' => 'Demotology'),
            array('id'=>6,'name' => 'Neurology'),
            array('id'=>7,'name' => 'Pathology'),
            array('id'=>8,'name' => 'Radiology'),
            array('id'=>9,'name' => 'Family Practice'),
        );
        \App\Speciality::insert($specilities);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specialities');
    }
}
