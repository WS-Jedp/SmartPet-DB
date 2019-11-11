<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetHasMedicamentsTable extends Migration
{

    public $tableName = 'pet_has_medicaments';

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
            $table->integer('id_medicament');
            $table->integer('id_date')->nullable();
            $table->date('datetime_start')->nullable();
            $table->date('datetime_end')->nullable();
            $table->integer('how_often');
            $table->integer('usetime');
            $table->boolean('state');

            $table->foreign('id_pet')->references('id_pet')->on('tbl_pets');
            $table->foreign('id_medicament')->references('id_medicament')->on('tbl_medicaments');
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
