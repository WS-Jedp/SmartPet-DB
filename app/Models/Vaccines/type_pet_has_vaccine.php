<?php

namespace App\Models\Vaccines;

use Illuminate\Database\Eloquent\Model;

class type_pet_has_vaccine extends Model
{
    protected $table = 'type_pet_has_vaccines';

    public $timestamps = false;

    protected $fillable = [
        'id', 'id_vaccine', 'id_type_pet'
    ];
}
