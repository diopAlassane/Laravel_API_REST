<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommunesArrondissements extends Model
{
    use HasFactory;

    protected $fillable = ['departements_id', 'arrondissements_id', 'nom_commune_Arr'];
}
