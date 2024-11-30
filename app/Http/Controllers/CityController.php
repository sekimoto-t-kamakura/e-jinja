<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shirine;
use App\Models\City;
use Illuminate\Support\Facades\Log;

class CityController extends Controller
{
    public function index(string $id)
    {
        // city_id に基づいて市区町村名を取得
        $city = City::findOrFail($id);

        // 該当する神社データを取得
        $shirines = Shirine::where('city_id', $id)->get();
        Log::info($shirines);

        return view('city.index', [
            'shirines' => $shirines,
            'city_name' => $city->name,
        ]);
    }
}
