<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Job extends Model
{
    use HasFactory;

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function getSlugAttribute(): string
    {
        return Str::slug($this->title);
    }
}
