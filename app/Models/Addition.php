<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addition extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function buckets() {
        return $this->belongsToMany(Bucket::class);
    }
    public function types() {
        return $this->belongsToMany(Type::class);
    }
}
