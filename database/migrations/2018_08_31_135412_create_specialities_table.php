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
            array('id'=>1,'name' => 'Dentist'),
            array('id'=>2,'name' => 'Aesthetics'),
            array('id'=>3,'name' => 'Geriatric'),
            array('id'=>4,'name' => 'Pediatrician'),
            array('id'=>5,'name' => 'Wheeler'),
            array('id'=>6,'name' => 'Woman Sp.')
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
