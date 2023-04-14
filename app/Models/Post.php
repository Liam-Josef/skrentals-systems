<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = array(
        'user_id',
        'title',
        'post_image',
        'body',
    );

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Use when on SERVER
//    public function setPostImageAttribute($value) {
//        $this->attributes['post_image'] = asset($value);
//    }

//    public function getPostImageAttribute($value) {
//        return asset($value);
//    }

    // Use LOCAL
    public function setPostImageAttribute($value) {
        $this->attributes['post_image'] = asset('storage/' . $value);
    }

    public function getPostImageAttribute($value) {
    if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
    return $value;
    }
    return asset('storage/' . $value);
    }

}
