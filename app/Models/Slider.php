<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Url;

class Slider extends Model
{
    protected $fillable = [
        'message', 'title', 'sub_title', 'image', 'start', 'end', 'status', 'url',
    ];

    public const ACTIVE_STATUS = 'active';
    public const INACTIVE_STATUS = 'inactive';

    public function url() {
        return $this->hasOne(Url::class);
    }
}
