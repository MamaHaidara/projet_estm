<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EC extends Model
{
    use HasFactory;
        protected $fillable = [
        'libelle',
        'idUE',


    ];

    public function UE(): BelongsTo
    {
        return $this->belongsTo(UE::class, 'idUE');
    }
      public function evaluer(): HasMany
    {
        return $this->hasMany(Evaluer::class);
    }

}
