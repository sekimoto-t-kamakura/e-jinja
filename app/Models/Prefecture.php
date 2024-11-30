<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Prefecture extends Model
{
    use HasFactory;

    public function shirine():HasMany
    {
        return $this->hasMany(Shirine::class);
    }


    public function area():BelongsTo
    {
        return $this->belongsTo(Area::class, 'area_id');
    }

    public function city():HasMany
    {
        return $this->hasMany(City::class);
    }
}
