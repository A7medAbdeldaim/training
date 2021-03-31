<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'type'];

    public function delete()
    {
        $this->items()->delete();
        return parent::delete();
    }

    public function items() {
        if ($this->attributes['type'] == 0) {
            return $this->hasMany(Bike::class, 'category_id');
        }
        return $this->hasMany(Car::class, 'category_id');
    }
}
