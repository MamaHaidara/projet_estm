<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Utilisateur extends Model
{
    use HasFactory;
      protected $fillable = [
        'nom',
        'prenom',
        'login',
        'motPasse',
        'profil',
    ];
    public function evaluer(): HasMany
    {
        return $this->hasMany(Evaluer::class);
    }
    public function inscrire(): HasOne
    {
        return $this->hasOne(Inscrire::class);
    }
       public function EtreResponsable(): HasOne
    {
        return $this->hasOne(Etre_Responsable::class);
    }
       public function enseigner(): HasOne
    {
        return $this->hasOne(Enseigner::class);
    }
}
