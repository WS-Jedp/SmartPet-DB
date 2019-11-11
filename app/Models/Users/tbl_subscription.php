<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class tbl_subscription extends Model
{
    protected $table = 'tbl_subscriptions';
    
    public $timestamps = false;

    protected $fillable = [
        'id_subscription', 'subscription', 'price'
    ];
}
