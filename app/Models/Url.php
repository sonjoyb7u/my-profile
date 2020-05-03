<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    protected $fillable = [
        'name', 'url_link', 'status',
    ];

    public const ACTIVE_STATUS = 'active';
}
