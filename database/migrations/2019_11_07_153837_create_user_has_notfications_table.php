<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserHasNotficationsTable extends Migration
{

    public $tableName = 'user_has_notifications';

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
            $table->integer('id_user');
            $table->integer('id_notification');
            $table->dateTime('datetime');

            $table->foreign('id_user')->references('id_user')->on('users');
            $table->foreign('id_notification')->references('id_notification')->on('tbl_notifications');
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
