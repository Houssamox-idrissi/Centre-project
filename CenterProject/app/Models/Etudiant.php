<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $table = 'etudiants';

    protected $fillable = [
        'id',
        'nom_complete',
        'branche',
        'matier',
        'niveau_etude',
        'duree',
        'prix',
        'age',
    ];
}
