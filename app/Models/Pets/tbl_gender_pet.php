<?php

namespace App\Models\Pets;

use Illuminate\Database\Eloquent\Model;

class tbl_gender_pet extends Model
{

    protected $primaryKey = 'id_gender_pet';

    protected $table = 'tbl_genders_pet';

    public $timestamps = false;

    protected $fillable = [
        'id_gender_pet', 'gender'
    ];
}
