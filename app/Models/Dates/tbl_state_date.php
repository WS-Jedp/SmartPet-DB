<?php

namespace App\Models\Dates;

use Illuminate\Database\Eloquent\Model;

class tbl_state_date extends Model
{

    protected $primaryKey = 'id_state_date';

    protected $table = 'tbl_states_date';

    public $timestamps = false;

    protected $fillable = [
        'id_state_date', 'state'
    ];
}
