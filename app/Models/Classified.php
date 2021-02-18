<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classified extends Model
{
    use HasFactory;

    public function classified_image()
    {
        return $this->hasMany(ClassifiedImage::class);
    }

    public function getSlugAttribute(): string
    {
        return Str::slug($this->title);
    }
}
