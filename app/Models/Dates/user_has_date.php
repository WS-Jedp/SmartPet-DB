<?php

namespace App\Models\Dates;

use Illuminate\Database\Eloquent\Model;

class user_has_date extends Model
{
    protected $table = 'user_has_dates';

    public $timestamps = false;

    protected $fillable = [
        'id', 'id_user', 'id_date'
    ];
}
