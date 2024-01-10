<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duration extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function types() {
        return $this->belongsToMany(Type::class);
    }
    public function availabils() {
        return $this->belongsToMany(Availabil::class);
    }
    public function prices() {
        return $this->belongsToMany(Price::class);
    }
}
