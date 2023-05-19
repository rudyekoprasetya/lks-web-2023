<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spot_vaccine extends Model
{
    use HasFactory;

    public function Spots()
    {
        return $this->hasMany(Spot::class);
    }

    public function Vaccines()
    {
        return $this->hasMany(Vaccine::class);
    }
}
