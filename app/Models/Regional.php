<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regional extends Model
{
    use HasFactory;

    public function Spots()
    {
        return $this->hasMany(Spot::class);
    }

    public function Societies()
    {
        return $this->hasMany(Society::class);
    }
}
