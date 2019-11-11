<?php

namespace App\Models\Chats;

use Illuminate\Database\Eloquent\Model;

class tbl_chat_message extends Model
{
    protected $table = 'tbl_chat_messages';

    public $timestamps = false;

    protected $fillable = [
        'id_chat_message', 'message', 'datetime', 'id_user'
    ];
}
