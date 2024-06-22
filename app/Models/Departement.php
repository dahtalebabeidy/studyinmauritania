<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;

    public function universite()
    {
        return $this->belongsTo(Universite::class);
    }

    public function programmes()
    {
        return $this->hasMany(Programme::class);
    }
}
