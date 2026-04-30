<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ControlSystem extends Model
{
    protected $table = 'control_systems';
    protected $guarded = [
        'id'
    ];
    protected $appends = ['logo_url'];
    public function getLogoUrlAttribute()
    {
        return $this->logo ? asset('storage/' . $this->logo) : null;
    }
}
