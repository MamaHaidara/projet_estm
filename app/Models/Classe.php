<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Classe extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'idFormation',


    ];

    public function formation(): BelongsTo
    {
        return $this->belongsTo(Formation::class, 'idFormation');
    }
       public function UE(): HasMany
    {
        return $this->hasMany(UE::class);
    }
    public function inscrire(): HasOne
    {
        return $this->hasOne(Inscrire::class);
    }

}
