<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $guarded = ['user_id'];

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }
}
