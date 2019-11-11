<?php

namespace App\Models\Chats;

use Illuminate\Database\Eloquent\Model;

class tbl_chat extends Model
{
    protected $table = 'tbl_chats';

    public $timestamps = false;

    protected $fillable = [
        'id_chat', 'id_chat_file', 'id_chat_message'
    ];
}
