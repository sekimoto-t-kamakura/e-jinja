<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class TopPageController extends Controller
{
    public function index()
    {
        $areas = Area::with(['prefecture.city'])->get();
        return view('index', ['areas' => $areas]);
    }
}
