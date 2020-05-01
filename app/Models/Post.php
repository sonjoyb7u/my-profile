<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id', 'blog_cat_id', 'title', 'slug', 'desc', 'image', 'status',
    ];

    public function blog_category() {
        return $this->belongsTo(BlogCategory::class, 'blog_cat_id', 'id');
    }
}
