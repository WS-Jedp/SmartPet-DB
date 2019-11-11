<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetHasMedicalHistoriesTable extends Migration
{

    public $tableName = 'pet_has_medical_histories';

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
            $table->integer('id_medical_history');

            $table->foreign('id_pet')->references('id_pet')->on('tbl_pets');
            $table->foreign('id_medical_history')->references('id_medical_history')->on('tbl_medical_histories');
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
