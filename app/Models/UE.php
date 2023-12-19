<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UE extends Model
{
    use HasFactory;
        protected $fillable = [
        'libelle',
        'idClasse',


    ];

    public function classe(): BelongsTo
    {
        return $this->belongsTo(Classe::class, 'idClasse');
    }

       public function EC(): HasMany
    {
        return $this->hasMany(EC::class);
    }
}
