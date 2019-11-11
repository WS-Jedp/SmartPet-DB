<?php

namespace App\Models\Dates;

use Illuminate\Database\Eloquent\Model;

class tbl_date extends Model
{
    protected $table = 'tbl_dates';

    public $timestamps = false;
    
    protected $fillable = [
        'id_date', 'description', 'prescription', 'datetime', 'id_service', 'id_state_date'
    ];
}
