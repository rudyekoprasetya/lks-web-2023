<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;

    public function Spot_vaccine() 
    {
        return $this->belongsTo(Spot_vaccine::class);
    }

    public function Vaccination() 
    {
        return $this->belongsTo(Vaccination::class);
    }
}
