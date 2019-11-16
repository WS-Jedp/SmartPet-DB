<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblRacePetsTable extends Migration
{
    public $tableName = 'tbl_races_pet';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'MyISAM';
            
            $table->bigIncrements('id_race_pet');
            $table->integer('id_type_pet');
            $table->string('race');

            $table->foreign('id_type_pet')->references('id_type_pet')->on('tbl_types_pet');
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
