<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $sliders  = Slider::all();
        $abouts = DB::table('abouts')->get();
        $services = DB::table('services')->get();
        $projects = DB::table('projects')->get();
        return view('Front.home.home', compact('sliders', 'abouts', 'services','projects'));
    }
    public function service($service)
    {
        $service = DB::table('services')->find($service);
        return view('Front.home.service', compact('service'));
    }
}
