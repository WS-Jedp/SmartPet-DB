<?php

namespace App\Models\Services;

use Illuminate\Database\Eloquent\Model;

class tbl_timetable extends Model
{
    
    protected $primaryKey = 'id_timetable';

    protected $table = 'tbl_timetables';

    public $timestamps = false;

    protected $fillable = [
        'id_timetable', 'name', 'time_start', 'time_end', 'weekend'
    ];
}
