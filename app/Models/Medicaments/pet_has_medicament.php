<?php

namespace App\Models\Medicaments;

use Illuminate\Database\Eloquent\Model;

class pet_has_medicament extends Model
{
    protected $table = 'pet_has_medicaments';

    public $timestamps = false;

    protected $fillable = [
        'id', 'id_pet','id_medicament', 'id_date', 'datetime_start', 'datetime_end', 'how_often', 'usetime', 'state'
    ];
}
