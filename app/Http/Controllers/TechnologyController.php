<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Technology;
use App\Models\Project;

class TechnologyController extends Controller
{


     // show
     public function show($id)
     {
         $technology= Technology::findOrfail($id);

         return view('technology.show',compact('technology'));
     }
// create
      public function create()
    {
        $technologies=Technology::all();
        $projects = Project::all();

        return view('technology.create',compact('technologies', 'projects'));
    }

    // store
public function store(Request $request)
{
    $data = $request -> all();

    $technology= Technology::create($data);



    return redirect() -> route('dashboard', $technology -> id);


}

    // edit
    public function edit($id)
    {
        $technology = Technology :: findOrFail($id);
        $project = Project::all();
        return view('technology.edit', compact('technology','project'));
    }

    public function update(Request $request, $id) {
        $data = $request -> all();
        $technology = Technology :: findOrFail($id);



        $technology -> update($data);
        return redirect() -> route('dashboard', $technology -> id);
    }

    public function destroy(Request $request, $id)
    {
        $technology = Technology::findOrFail($id);
        $technology->projects()->detach();
        $technology->delete();

        return redirect()->route('dashboard');
    }

}


