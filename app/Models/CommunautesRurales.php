<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommunautesRurales extends Model
{
    use HasFactory;

    protected $fillable = ['regions_id', 'departements_id', 'arrondissements_id', 'nom_comm_rurale'];
}
