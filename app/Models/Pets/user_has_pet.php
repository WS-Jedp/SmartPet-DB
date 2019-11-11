<?php

namespace App\Models\Pets;

use Illuminate\Database\Eloquent\Model;

class user_has_pet extends Model
{
    protected $table = 'user_has_pets';
    
    public $timestamps = false;

    protected $fillable = [
        'id', 'id_user', 'id_pet'
    ];
}
