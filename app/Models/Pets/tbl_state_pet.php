<?php

namespace App\Models\Pets;

use Illuminate\Database\Eloquent\Model;

class tbl_state_pet extends Model
{
    protected $primaryKey = 'id_state_pet';

    protected $table = 'tbl_states_pet';

    public $timestamps = false;

    protected $fillable = [
        'id_state_pet', 'state'
    ];
}
