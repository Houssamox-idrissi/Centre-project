<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prof extends Model
{
    use HasFactory;
    protected $table = 'profs';
    protected $fillable = ['nom_complete', 'seance', 'salaire', 'nombre_etudiants', 'matiere'];
}
