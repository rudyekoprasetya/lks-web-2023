<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccination extends Model
{
    use HasFactory;

    public function Societies() {
        return $this->hasMany(Society::class);
    }

    public function Spots() {
        return $this->hasMany(Spot::class);
    }

    public function Vaccines() {
        return $this->hasMany(Vaccine::class);
    }

    public function Medicals() {
        return $this->hasMany(Medical::class);
    }

}
