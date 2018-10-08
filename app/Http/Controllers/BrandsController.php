<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index()
    {
        $nav = 'brand';
        return view('brands.index', compact('nav'));
    }
}
