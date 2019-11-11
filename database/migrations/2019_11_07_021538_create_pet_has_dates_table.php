<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetHasDatesTable extends Migration
{

    public $tableName = 'pet_has_dates';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->bigIncrements('id');
            $table->integer('id_pet');
            $table->integer('id_date');

            $table->foreign('id_pet')->references('id_pet')->on('tbl_pets');
            $table->foreign('id_date')->references('id_date')->on('tbl_dates');
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
