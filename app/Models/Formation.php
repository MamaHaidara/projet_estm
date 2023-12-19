<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Formation extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'description'

    ];
    public function classe(): HasMany
    {
        return $this->hasMany(Classe::class);
    }
       public function etreResponsable(): HasOne
    {
        return $this->hasOne(Etre_Responsable::class);
    }
}
