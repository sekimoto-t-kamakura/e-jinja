<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class God extends Model
{
    use HasFactory;

    public function shirine():HasMany
    {
        return $this->hasMany(Shirine::class);
    }
}
