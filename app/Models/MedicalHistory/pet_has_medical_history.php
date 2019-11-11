<?php

namespace App\Models\MedicalHistory;

use Illuminate\Database\Eloquent\Model;

class pet_has_medical_history extends Model
{
    protected $table = 'pet_has_medical_histories';

    public $timestamps = false;

    protected $fillable = [
        'id', 'id_pet', 'id_medical_history'
    ];
}
