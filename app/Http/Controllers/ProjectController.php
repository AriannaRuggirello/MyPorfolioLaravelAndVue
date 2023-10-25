<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Type;
use App\Models\Technology;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    // lettura
    public function index()
    {
        $projects = Project::all();
        $technologies = Technology::all();
        return view('admin.dashboard', compact('projects', 'technologies'));
    }
    // show
    public function show($id)
    {
        $project= Project::findOrfail($id);
        $technologies = $project->technologies;
        $types = $project->types;
        return view('project.show',compact('project','technologies','types'));
    }
    // creazione
    public function create()
    {
        $projects = Project::all();
        $types=Type::all();
        $technologies=Technology::all();

        return view('project.create',compact('projects','types','technologies'));
    }

    // store
    public function store(Request $request)
    {
        $data = $request -> all();

        $img_path = Storage::put("uploads", $data["image"]);
        $data["image"] = $img_path;

        $project= Project::create($data);

        $project->technologies()->attach($data['technologies']);


        return redirect() -> route('dashboard', $project -> id);


    }

    // edit
    public function edit($id)
    {
        $project = Project :: findOrFail($id);
        $types = Type::all();
        $technologies = Technology::all();
        return view('project.edit', compact('project','types','technologies'));
    }

    public function update(Request $request, $id) {
        $data = $request -> all();
        $project = Project :: findOrFail($id);
        $project->technologies()->sync(
            array_key_exists('technologies', $data)
                ? $data['technologies']
                : []
        );
        if ($request->hasFile('image')) {
            // Salva il nuovo file e ottieni il percorso
            $path = $request->file('image')->store('uploads', 'public');

            $data["image"] = $path;
        }

        $project -> update($data);
        return redirect() -> route('dashboard', $project -> id);
    }


    public function destroy(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->technologies()->detach();

        $project->delete();

        return redirect()->route('dashboard');
    }


}


