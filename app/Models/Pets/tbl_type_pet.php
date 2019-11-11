<?php

namespace App\Models\Pets;

use Illuminate\Database\Eloquent\Model;

class tbl_type_pet extends Model
{
    protected $table = 'tbl_types_pet';

    public $timestamps = false;

    protected $fillable = [
        'id_type_pet', 'type'
    ];
}
