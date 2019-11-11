<?php

namespace App\Models\Chats;

use Illuminate\Database\Eloquent\Model;

class tbl_chat_file extends Model
{
    protected $table = 'tbl_chat_files';

    public $timestamps = false;

    protected $fillable = [
        'id_chat_file', 'file', 'datetime', 'id_user'
    ];
}
