<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPetsTable extends Migration
{

    public $tableName = 'tbl_pets';    

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'MyISAM';
            
            $table->bigIncrements('id_pet');
            $table->string('name', 45);
            $table->string('last_name',45);
            $table->date('date_born');
            $table->integer('weight');
            $table->string('photo',150)->nullable();
            $table->integer('id_type_pet');
            $table->integer('id_gender_pet');
            $table->integer('id_race_pet');
            $table->integer('id_state_pet');

            $table->foreign('id_type_pet')->references('id_type_pet')->on('tbl_types_pet'); 
            $table->foreign('id_gender_pet')->references('id_gender_pet')->on('tbl_genders_pet');
            $table->foreign('id_race_pet')->references('id_race_pet')->on('tbl_races_pet');
            $table->foreign('id_state_pet')->references('id_state_pet')->on('tbl_states_pet');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
