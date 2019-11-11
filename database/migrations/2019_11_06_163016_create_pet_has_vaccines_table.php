<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetHasVaccinesTable extends Migration
{

    public $tableName = 'pet_has_vaccines';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_pet');
            $table->integer('id_vaccine');
            $table->date('datetime_start')->nullable();
            $table->date('datetime_end')->nullable();
            $table->boolean('state');

            $table->foreign('id_pet')->references('id_pet')->on('tbl_pets');
            $table->foreign('id_vaccine')->references('id_vaccine')->on('tbl_vaccines');
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
