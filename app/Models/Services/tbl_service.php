<?php

namespace App\Models\Services;

use Illuminate\Database\Eloquent\Model;

class tbl_service extends Model
{
    protected $primaryKey = 'id_service';

    protected $table = 'tbl_services';

    public $timestamps = false;

    protected $fillable = [
        'id_service', 'service', 'description', 'price', 'id_timetable', 'state'
    ];
}
