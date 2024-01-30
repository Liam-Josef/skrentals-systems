<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Availabil extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function buckets() {
        return $this->belongsToMany(Bucket::class);
    }
    public function types() {
        return $this->belongsToMany(Type::class);
    }
    public function durations() {
        return $this->belongsToMany(Duration::class);
    }
    public function prices() {
        return $this->belongsToMany(Price::class);
    }
}
