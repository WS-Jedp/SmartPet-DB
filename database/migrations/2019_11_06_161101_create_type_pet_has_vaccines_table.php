<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypePetHasVaccinesTable extends Migration
{

    public $tableName = 'type_pet_has_vaccines';
        
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_vaccine');
            $table->integer('id_type_pet');

            $table->foreign('id_vaccine')->references('id_vaccine')->on('tbl_vaccines');
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
