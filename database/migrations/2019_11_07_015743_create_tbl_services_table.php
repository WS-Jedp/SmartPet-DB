<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblServicesTable extends Migration
{

    public $tableName = 'tbl_services';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->bigIncrements('id_service');
            $table->string('service');
            $table->mediumText('description');
            $table->integer('price');
            $table->integer('id_timetable');
            $table->boolean('state');

            $table->foreign('id_timetable')->references('id_timetable')->on('tbl_timetables');
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
