<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EtreResponsable extends Model
{
    use HasFactory;
         protected $fillable = [

        'idEnseignant',
        'idFormation',
        'annee',
    ];

        public function formation(): BelongsTo
    {
        return $this->belongsTo(Formation::class, 'idFormation');
    }
        public function utilisateur(): BelongsTo
    {
        return $this->belongsTo(Utilisateur::class, 'idEnseignant');
    }
}
