<?php

namespace App\Models\Pets;

use Illuminate\Database\Eloquent\Model;

class tbl_pet extends Model
{
    protected $table = 'tbl_pets';

    public $timestamps = false;

    protected $fillable = [
        'id_pet','name', 'last_name', 'date_born', 'weight', 'photo', 'id_type_pet', 'id_gender_pet', 'id_race_pet','id_state_pet'
    ];
}
