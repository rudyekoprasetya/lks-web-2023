<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medical extends Model
{
    use HasFactory;

    public function User ()
    {
        return $this->belongsTo(User::class);
    }

    public function Spot ()
    {
        return $this->belongsTo(Spot::class);
    }
}
