<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Society extends Model
{
    use HasFactory;

    public function Vaccination()
    {
        return $this->belongsTo(Vaccination::class);
    }

    public function Consultation()
    {
        return $this->belongsTo(Consultation::class);
    }

    public function Regionals()
    {
        return $this->hasMany(Regional::class);
    }
}
