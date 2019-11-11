<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class tbl_state_user extends Model
{
    protected $table = 'tbl_states_user';

    public $timestamps = false;

    protected $fillable = [
        'id_state_user', 'state'
    ];
}
