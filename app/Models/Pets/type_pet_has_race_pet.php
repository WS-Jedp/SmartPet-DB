<?php

namespace App\Models\Pets;

use Illuminate\Database\Eloquent\Model;

class type_pet_has_race_pet extends Model
{
    protected $table = 'type_pet_has_races_pet';

    public $timestamps = false;

    protected $fillable = [
        'id', 'id_type_pet', 'id_race_pet'
    ];
}
