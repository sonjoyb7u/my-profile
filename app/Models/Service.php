<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title', 'sub_title', 'icon_name', 'image', 'status',
    ];

    public const ACTIVE_STATUS = 'active';
    public const INACTIVE_STATUS = 'inactive';

}
