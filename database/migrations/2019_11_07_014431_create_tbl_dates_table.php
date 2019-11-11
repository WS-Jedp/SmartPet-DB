<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblDatesTable extends Migration
{

    public $tableName = 'tbl_dates';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->bigIncrements('id_date');
            $table->string('description');
            $table->string('prescription');
            $table->date('datetime');
            $table->integer('id_service');
            $table->integer('id_state_date');

            $table->foreign('id_service')->references('id_service')->on('tbl_services');
            $table->foreign('id_state_date')->references('id_state_date')->on('tbl_states_date');
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
