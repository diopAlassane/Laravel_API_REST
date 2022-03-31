<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arrondissements extends Model
{
    use HasFactory;

    protected $fillable = ['regions_id', 'departements_id', 'nom_arrondissement'];
}
