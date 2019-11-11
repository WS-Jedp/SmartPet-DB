<?php

namespace App\Models\Vaccines;

use Illuminate\Database\Eloquent\Model;

class tbl_vaccine extends Model
{
    protected $table = 'tbl_vaccines';

    public $timestamps = false;

    protected $fillable = [
        'id_vaccine', 'vaccine', 'description', 'how_often'
    ];
}
