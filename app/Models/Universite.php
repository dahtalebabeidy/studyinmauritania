<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universite extends Model
{
    use HasFactory;

    public function ville()
    {
        return $this->belongsTo(Ville::class);
    }

    public function departements()
    {
        return $this->hasMany(Departement::class);
    }
}
