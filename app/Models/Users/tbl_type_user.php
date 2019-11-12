<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class tbl_type_user extends Model
{
    protected $primaryKey = 'id_type_user';

    protected $table = 'tbl_types_user';

    public $timestamps = false;

    protected $fillable = [
        'id_type_user', 'type'
    ];
}
