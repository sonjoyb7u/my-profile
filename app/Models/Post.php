<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id', 'blog_cat_id', 'title', 'slug', 'desc', 'image', 'status',
    ];

    public const PUBLISHED = 'published';
    public const DRAFT = 'draft';

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function blog_category() {
        return $this->belongsTo(BlogCategory::class, 'blog_cat_id', 'id');
    }
}
