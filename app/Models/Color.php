<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_color', 'color_id', 'category_id');
    }
}
