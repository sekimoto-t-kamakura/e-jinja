<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function inquiry()
    {
        return view('footer.inquiry');
    }

    public function privacyPolicy()
    {
        return view('footer.privacyPolicy');
    }

    public function termsOfService()
    {
        return view('footer.termsOfService');
    }
}
