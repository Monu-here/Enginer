<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{

    public function index()

    {
        $sliders = DB::table('sliders')->get();

        return view('Back.Slider.index', compact('sliders'));
    }
    public function add(Request $request)
    {
        if ($request->getMethod() == "POST") {
            $slider = new Slider();
            $slider->image = $request->image->store('uploads/Slider');
            $slider->text1 = $request->text1;
            $slider->save();
            return redirect()->back()->with('message', 'Data add sucessfully');
        } else {
            return view('Back.Slider.add');
        }
    }
    public function edit(Request $request,  Slider $slider)
    {
        if ($request->getMethod() == "POST") {
            if ($request->file('image')) {
                $slider->image = $request->image->store('uploads/Slider');
            }
            $slider->text1 = $request->text1;
            $slider->save();
            return redirect()->back()->with('message', 'Data update sucessfully');
        } else {
            return view('Back.Slider.edit', compact('slider'));
        }
    }
    public function del($slider)
    {
        DB::table('sliders')->where('id', $slider)->delete();
        return redirect()->back()->with('message', 'Data delete sucessfully');
    }
    // Assume this function is inside a controller
    public function show($sliderId)
    {
        $slider = DB::table('sliders')->find($sliderId);
        return redirect()->route('admin.slider.show', ['sliderId' => $sliderId->id]);
    }
}
