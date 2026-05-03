<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Link extends Model
{
    protected $fillable = [
        'title',
        'url',
        'description',
        'department',
        'image'
    ];
    protected $appends = [
        'link_image'

    ];
    public function getLinkUrlAttribute()
    {
        return $this->image ? Storage::url($this->image) : null;
    }
}
