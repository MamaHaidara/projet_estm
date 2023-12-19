<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Inscrire extends Model
{
    use HasFactory;
    protected $fillable = [

        'idEtudiant',
        'idClasse',
        'annee',
    ];

        public function classe(): BelongsTo
    {
        return $this->belongsTo(Classe::class, 'idClasse');
    }
        public function utilisateur(): BelongsTo
    {
        return $this->belongsTo(Utilisateur::class, 'idEtudiant');
    }

}
