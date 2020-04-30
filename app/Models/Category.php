<?php

namespace App\Models;
use App\Models\Project;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'slug', 'status',
    ];

    public const ACTIVE_STATUS = 'active';

    public function projects() {
        return $this->hasMany(Project::class);
    }
}
