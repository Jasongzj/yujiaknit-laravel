<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $nav = 'contact';
        return view('contact_us.index', compact('nav'));
    }
}
