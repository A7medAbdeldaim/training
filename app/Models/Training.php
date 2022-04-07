<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Training extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class, 'training_id');
    }

    public function getImageAttribute(): string
    {
        return Storage::url($this->attributes['image']);
    }
}
