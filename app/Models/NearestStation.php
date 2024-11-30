<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class NearestStation extends Model
{
    use HasFactory;

    public function shirine():HasMany
    {
        return $this->hasMany(Shirine::class);
    }

    public function prefecture()
    {
        return $this->belongsTo(Prefecture::class);
    }
}
