<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Category $category)
    {
        $categories = $category->all();
        $nav = 'index';
        return view('index.index', compact('categories', 'nav'));
    }
}
