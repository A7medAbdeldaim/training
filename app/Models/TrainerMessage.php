<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TrainerMessage extends Model
{
    use HasFactory;
    protected $fillable = ['trainer_id', 'message', 'conversation_id'];

    public function trainer(): BelongsTo
    {
        return $this->belongsTo(Trainer::class);
    }

    public function sender(): BelongsTo
    {
        return $this->belongsTo(Trainer::class, 'trainer_id');
    }
}
