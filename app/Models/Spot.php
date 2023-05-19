<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    use HasFactory;

    public function spot_vaccine()
    {
        return $this->belongsTo(Spot_vaccine::class);
    }

    public function Regionals()
    {
        return $this->hasMany(Regional::class);
    }
}
