<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function Omgeving()
    {
        return view('Omgeving');
    }

    public function Verhuur()
    {
        return view('Verhuur');
    }

    public function Contact()
    {
        return view('Contact');
    }
}
