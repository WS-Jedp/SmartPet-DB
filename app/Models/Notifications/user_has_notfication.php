<?php

namespace App\Models\Notifications;

use Illuminate\Database\Eloquent\Model;

class user_has_notfication extends Model
{
    protected $table = 'user_has_notifications';

    public $timestamps = false;

    protected $fillable = [
        'id', 'id_user', 'id_notification'
    ];
}
