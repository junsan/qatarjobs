<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classified extends Model
{
    use HasFactory;

    public function classified_image()
    {
        return $this->hasMany(ClassifiedImage::class);
    }
}
