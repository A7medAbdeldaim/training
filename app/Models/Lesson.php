<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Lesson extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function training(): BelongsTo
    {
        return $this->belongsTo(Training::class, 'training_id');
    }

    public function getImageAttribute(): string
    {
        return Storage::url($this->attributes['image']);
    }

    public function getVideoAttribute(): string
    {
        return Storage::url($this->attributes['video']);
    }
}
