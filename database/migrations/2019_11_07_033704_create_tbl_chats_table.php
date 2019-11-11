<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblChatsTable extends Migration
{

    public $tableName = 'tbl_chats';
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->bigIncrements('id_chat');
            $table->integer('id_chat_file');
            $table->integer('id_chat_message');

            $table->foreign('id_chat_file')->references('id_chat_file')->on('tbl_chat_files');
            $table->foreign('id_chat_message')->references('id_chat_message')->on('tbl_chat_messages');
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
