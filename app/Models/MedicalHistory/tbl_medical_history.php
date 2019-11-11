<?php

namespace App\Models\MedicalHistory;

use Illuminate\Database\Eloquent\Model;

class tbl_medical_history extends Model
{
    protected $table = 'tbl_medical_histories';

    public $timestamps = false;

    protected $fillable = [
        'id_medical_history', 'description', 'datetime', 'comments', 'id_date', 'file'
    ];
}
