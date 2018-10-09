<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $nav = 'about';
        return view('about.index', compact('nav'));
    }
}
