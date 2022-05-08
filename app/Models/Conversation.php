<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Conversation extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function trainer_messages(): HasMany
    {
        return $this->hasMany(TrainerMessage::class);
    }

    public function trainee_messages(): HasMany
    {
        return $this->hasMany(TraineeMessage::class);
    }

    public function trainer(): BelongsTo
    {
        return $this->belongsTo(Trainer::class);
    }

    public function trainee(): BelongsTo
    {
        return $this->belongsTo(Trainee::class);
    }

    public function getLastMessageAttribute()
    {
        if (auth('trainees')->check()) {
            $message = TraineeMessage::where('conversation_id', $this->attributes['id'])->first();
            return $message ? $message->message : null;
        }
        return null;
    }
}
