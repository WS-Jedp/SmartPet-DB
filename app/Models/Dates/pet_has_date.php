<?php

namespace App\Models\Dates;

use Illuminate\Database\Eloquent\Model;

class pet_has_date extends Model
{
    protected $table = 'pet_has_dates';

    public $timestamps = false;

    protected $fillable = [
        'id', 'id_pet', 'id_date'
    ];
}
