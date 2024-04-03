<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    public function index()
    {
        $settings = DB::table('settings')->get();
        return view('Back.setting.index', compact('settings'));
    }
    public function add(Request $request)
    {
        if ($request->getMethod() == "POST") {
            $setting = Setting::first();
            if ($setting == null) {
                // dd($setting);
                $setting = new Setting();
            }
            $setting->email = $request->email;
            $setting->location = $request->location;
            $setting->phone = $request->phone;
            $setting->websitename = $request->websitename;
            $setting->websitetext = $request->websitetext;
            $setting->save();
            return redirect()->back()->with('message', 'Setting add Sucessfully');
        } else {
            $setting = Setting::first();

            return view('Back.setting.add',compact('setting'));
        }
    }
}
