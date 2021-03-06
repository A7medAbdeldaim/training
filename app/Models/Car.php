<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'description', 'price', 'model', 'image', 'user_id', 'category_id', 'type', 'status',
        'color', 'engine_displacement', 'max_power', 'max_torq', 'no_cylinder', 'no_gears', 'seat_height',
        'ground_clearance', 'weight', 'tank_capacity', 'mileage', 'top_speed', 'fuel_type',
    ];

    public function toArray() {
        return parent::toArray() + [
            'type_name' => $this->type_name
        ];
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function getTypeNameAttribute() {
        if ($this->attributes['type'] == 0) {
            return 'For Rent';
        }
        return 'For Sell';
    }

    public function getImageAttribute() {
        return Storage::disk('public')->url($this->attributes['image']);
    }
}
