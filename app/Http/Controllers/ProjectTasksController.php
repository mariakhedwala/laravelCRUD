<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{
	public function store(Project $project)
	{
		$validated = request()->validate(['description'=>'required']);
		// $valid = $validated['description'];
		// print_r($validated['description']); exit();
		$project->addTask($validated);
		// Task::create([
		// 	'project_id' => $project->id,
		// 	'description' => request('description')
		// ]);


		return back();
	}
    // public function update(Task $task) //old update method
    // {
	// 	// if (request()->has('completed')) {
	// 	// 	$task->complete();
	// 	// } else {
	// 	// 	$task->incomplete();
	// 	// }

	// 	// request()->has('completed') ? $task->complete() : $task->incomplete();

	// 	$method = request()->has('completed') ? 'complete' : 'incomplete';
	// 	$task->$method();

    //     // $task->update([
    //     // 	'completed' => request()->has('completed')
    //     // ]);

    //     return back();
    // }
}
