<?php

namespace App\Models\Chats;

use Illuminate\Database\Eloquent\Model;

class user_has_chat extends Model
{
    protected $table = 'user_has_chats';

    public $timestamps = false;

    protected $fillable = [
        'id', 'id_user', 'id_chat'
    ];
}
