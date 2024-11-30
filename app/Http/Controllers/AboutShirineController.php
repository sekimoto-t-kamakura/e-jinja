<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutShirineController extends Controller
{
    public function aboutInShirine()
    {
        return view('column.aboutInShirine');
    }

    public function aboutWorship()
    {
        return view('column.aboutWorship');
    }

    public function aboutTypes()
    {
        return view('column.aboutTypes');
    }

    public function aboutFestivals()
    {
        return view('column.aboutFestivals');
    }

    public function aboutMyths()
    {
        return view('column.aboutMyths');
    }
}
