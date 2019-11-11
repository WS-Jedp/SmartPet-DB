<?php

namespace App\Models\Pets;

use Illuminate\Database\Eloquent\Model;

class pet_has_vaccine extends Model
{
    protected $table = 'pet_has_vaccines';

    public $timestamps = false;

    protected $fillable = [
        'id', 'id_pet', 'id_vaccine', 'datetime_start', 'datetime_end', 'state'
    ];
}
