<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypePetHasMedicamentsTable extends Migration
{

    public $tableName = 'type_pet_has_medicaments';

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
            $table->integer('id_type_pet');
            $table->integer('id_medicament');

            $table->foreign('id_type_pet')->references('id_type_pet')->on('tbl_types_pet');
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
