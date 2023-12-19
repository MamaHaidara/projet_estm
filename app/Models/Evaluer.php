<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Evaluer extends Model
{
    use HasFactory;
      protected $fillable = [

        'idEC',
        'idEtudiant',
        'pointsForts',
        'pointsFaibles',
        'note',
        'date',
    ];

        public function EC(): BelongsTo
    {
        return $this->belongsTo(EC::class, 'idEC');
    }
        public function utilisateur(): BelongsTo
    {
        return $this->belongsTo(Utilisateur::class, 'idEtudiant');
    }
}
