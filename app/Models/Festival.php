<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Festival extends Model
{
    use HasFactory;

    public function festival_category()
    {
        return $this->belongsTo(FestivalCategory::class);
    }
}
