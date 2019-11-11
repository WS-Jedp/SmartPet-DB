<?php

namespace App\Models\Pets;

use Illuminate\Database\Eloquent\Model;

class tbl_race_pet extends Model
{
    protected $table = 'tbl_races_pet';
    
    public $timestamps = false;

    protected $fillable = [
        'id_race_pet', 'race'
    ];
}
