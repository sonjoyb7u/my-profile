<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name', 'comment', 'image', 'status',
    ];

    public const ACTIVE_STATUS = 'active';
}
