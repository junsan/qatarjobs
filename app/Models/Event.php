<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    public function source()
    {
        return $this->belongsTo(Source::class);
    }

    public function getSlugAttribute(): string
    {
        return Str::slug($this->title);
    }
}
