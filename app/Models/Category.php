<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cache;

class Category extends Model
{
    protected $fillable = ['name', 'icon', 'sort'];

    protected $cacheKey = 'yujia_categories';

    protected $cacheExpireInMinutes = 1440;

    public function getAllCache()
    {
        return Cache::remember($this->cacheKey, $this->cacheExpireInMinutes, function () {
            return $this->all();
        });
    }
}
