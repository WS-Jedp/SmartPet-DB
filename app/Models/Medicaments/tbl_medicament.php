<?php

namespace App\Models\Medicaments;

use Illuminate\Database\Eloquent\Model;

class tbl_medicament extends Model
{

    protected $primaryKey = 'id_medicament';

    protected $table = 'tbl_medicaments';

    public $timestamps = false;

    protected $fillable = [
        'id_medicament', 'name', 'quantity', 'description', 'inventory'
    ];
}
