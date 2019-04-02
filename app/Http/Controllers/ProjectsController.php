<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::paginate(4);

        return view('projects.index' , compact('projects'));
    }

    public function create(Project $project)
    {
        return view('projects.create', compact('project'));
    }

    public function store()
    {
        $validated = request()->validate([
            'title' => ['required', 'min:3'],
            'desc' => ['required', 'min:10']
        ]);
        Project::create($validated);

        // $project = new Project();
        // $project->title = request('title');
        // $project->desc = request('desc');
        // $project->save();

        return redirect('/projects');
    }

    public function show(Project $project)
    {
        // $twitter = app('twitter');
        // dd($twitter);
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        // return $project->id;
        return view('projects.create', compact('project'));
    }

    public function update(Project $project)
    {
        $project->update(request(['title', 'desc'])); //mass assignment

        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }

}
