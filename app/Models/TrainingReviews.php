<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TrainingReviews extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function trainee(): BelongsTo
    {
        return $this->belongsTo(Trainee::class);
    }
}
