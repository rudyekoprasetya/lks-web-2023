<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    public function Society() 
    {
        return $this->belongsTo(Society::class);
    }

    public function Medical() 
    {
        return $this->belongsTo(Medical::class);
    }
}
