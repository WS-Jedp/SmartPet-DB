<?php

namespace App\Models\Notifications;

use Illuminate\Database\Eloquent\Model;

class tbl_notification extends Model
{
    protected $table = 'tbl_notifications';

    public $timestamps = false;

    protected $fillable = [
        'id_notification', 'title', 'message', 'type'
    ];
}
