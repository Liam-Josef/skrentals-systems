<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function types() {
        return $this->belongsToMany(Type::class);
    }
    public function durations() {
        return $this->belongsToMany(Duration::class);
    }
    public function availabils() {
        return $this->belongsToMany(Availabil::class);
    }
}
