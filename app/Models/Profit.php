<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Profit extends Model
{
    use HasFactory;

    public function shirine():HasMany
    {
        return $this->hasMany(Shirine::class);
    }

    public function profit_category():BelongsTo
    {
        return $this->belongsTo(ProfitCategory::class);
    }
}
