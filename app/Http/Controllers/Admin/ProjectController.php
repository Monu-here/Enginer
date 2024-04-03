<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = DB::table('projects')->get();
        return view('Back.Project.index',compact('projects'));
    }
    public function add(Request $request)
    {
        if ($request->getMethod() == "POST") {
            $project  =  new Project();
            $project->name = $request->name;
            $project->desc = $request->desc;
            $project->category_id = $request->category_id;
            $project->image = $request->image->store('uploads/Project');
            $project->save();
            return redirect()->back()->with('message', 'Project Add sucessfully');
        } else {
            return view('Back.Project.add');
        }
    }
    public function edit(Request $request, Project $project)
    {
        if ($request->getMethod() == "POST") {
            $project->name = $request->name;
            $project->desc = $request->desc;
            $project->category_id = $request->category_id;

            if ($request->hasFile('image')) {
                $project->image = $request->image->store('uploads/Project');
            }
            $project->save();
            return redirect()->back()->with('message', 'Project Update sucessfully');
        } else {
            return view('Back.Project.edit', compact('project'));
        }
    }
}
