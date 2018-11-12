<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cache;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name', 'icon', 'sort'];

    public $cacheKey = 'yujia_categories';

    protected $cacheExpireInMinutes = 1440;

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function getAllCache()
    {
        return Cache::remember($this->cacheKey, $this->cacheExpireInMinutes, function () {
            return $this->all();
        });
    }
}
