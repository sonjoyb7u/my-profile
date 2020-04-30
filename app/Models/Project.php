<?php

namespace App\Models;
use App\Models\User;
use App\Models\Category;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'category_id', 'name', 'slug', 'desc', 'image', 'status',
    ];

    public const PUBLISHED = 'published';
    public const DRAFT = 'draft';

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
