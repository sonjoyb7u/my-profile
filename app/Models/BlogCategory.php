<?php

namespace App\Models;
use App\Models\Post;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $fillable = [
        'name', 'slug', 'status',
    ];

    public const ACTIVE_STATUS = 'active';


    public function posts() {
        return $this->hasMany(Post::class);
    }
}
