<?php

namespace App\Models\Medicaments;

use Illuminate\Database\Eloquent\Model;

class type_pet_has_medicament extends Model
{
    protected $table = 'type_pet_has_medicaments';

    public $timestamps = false;

    protected $fillable = [
        'id', 'id_type_pet', 'id_medicament'
    ];
}
