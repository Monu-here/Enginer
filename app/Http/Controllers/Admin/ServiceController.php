<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function index()
    {
        $services = DB::table('services')->get();

        return view('Back.Service.index', compact('services'));
    }
    public function add(Request $request)
    {
        if ($request->getMethod() == "POST") {
            $service = new Service();
            $service->image = $request->image->store('uploads/service');
            $service->text1 = $request->text1;
            $service->text2 = $request->text2;
            $service->save();
            return redirect()->back()->with('message', 'Data add sucessfully');
        } else {
            return view('Back.Service.add');
        }
    }
    public function edit(Request $request,  Service $service)
    {
        if ($request->getMethod() == "POST") {
            if ($request->file('image')) {
                $service->image = $request->image->store('uploads/service');
            }
            $service->text1 = $request->text1;
            $service->text2 = $request->text2;
            $service->save();
            return redirect()->back()->with('message', 'Data update sucessfully');
        } else {
            return view('Back.Service.edit', compact('service'));
        }
    }
    public function del($service)
    {
        DB::table('services')->where('id', $service)->delete();
        return redirect()->back()->with('message', 'Data delete sucessfully');
    }
}
