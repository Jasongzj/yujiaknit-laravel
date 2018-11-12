<?php

namespace App\Observers;

use App\Models\Category;
use Cache;

class CategoryObserver
{
    public function saved(Category $category)
    {
        Cache::forget($category->cacheKey);
    }
}