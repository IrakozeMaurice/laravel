<?php

namespace App\Http\Controllers;

use App\Project;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProjectTasksController extends Controller
{
    public function update(Task $task){

        $task->update(
            [
                'completed' => request()->has('completed')
            ]
        );
    }
    public function store(Project $project){

        $attributes = request()->validate([
            'description' => ['required', 'min:3', 'max:255']
            ]);

        $project->addTask($attributes);

        return back();

    }
}
