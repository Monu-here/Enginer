<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = DB::table('abouts')->get();

        return view('Back.About.index', compact('abouts'));
    }
    public function add(Request $request)
    {
        if ($request->getMethod() == "POST") {
            $about = new About();
            $about->image = $request->image->store('uploads/About');
            $about->text1 = $request->text1;
            $about->text2 = $request->text2;
            $about->save();
            return redirect()->back()->with('message', 'Data add sucessfully');
        } else {
            return view('Back.About.add');
        }
    }
    public function edit(Request $request,  About $about)
    {
        if ($request->getMethod() == "POST") {
            if ($request->file('image')) {
                $about->image = $request->image->store('uploads/Slider');
            }
            $about->text1 = $request->text1;
            $about->text2 = $request->text2;
            $about->save();
            return redirect()->back()->with('message', 'Data update sucessfully');
        } else {
            return view('Back.About.edit', compact('about'));
        }
    }
    public function del($about)
    {
        DB::table('abouts')->where('id', $about)->delete();
        return redirect()->back()->with('message', 'Data delete sucessfully');
    }
    // Assume this function is inside a controller
    // public function show($aboutId)
    // {
    //     $slider = DB::table('sliders')->find($aboutId);
    //     return redirect()->route('admin.about.show', ['sliderId' => $aboutId->id]);
    // }
}
