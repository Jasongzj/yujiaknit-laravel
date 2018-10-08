<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request, News $news)
    {
        $newsList = $news->paginate(20);
        $nav = 'news';
        return view('index.news.index', compact('newsList', 'nav'));
    }

    public function show(Request $request, News $news)
    {
        return view('index.news.show', compact('news'));
    }
}
