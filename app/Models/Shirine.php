<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Shirine extends Model
{
    use HasFactory;

    // リレーション

    public function area(): BelongsTo
    {
        return $this->belongsTo(Area::class);
    }

    public function prefecture(): BelongsTo
    {
        return $this->belongsTo(Prefecture::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function condition(): BelongsTo
    {
        return $this->belongsTo(Condition::class);
    }

    public function nearestStation(): BelongsTo
    {
        return $this->belongsTo(NearestStation::class);
    }

    public function god(): BelongsTo
    {
        return $this->belongsTo(God::class);
    }

    public function profit(): BelongsTo
    {
        return $this->belongsTo(Profit::class);
    }
}


