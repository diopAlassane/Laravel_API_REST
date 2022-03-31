<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departements extends Model
{
    use HasFactory;

    protected $fillable = [
        'regions_id',
        'code_ansd_dep',
        'nom_departement'
    ];
}
