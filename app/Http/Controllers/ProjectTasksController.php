<?php

namespace App\Http\Controllers;

use App\Project;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProjectTasksController extends Controller
{

    public function store(Project $project){

        $project->addTask(
            request()->validate(['description' => ['required', 'min:3', 'max:255']])
        );

        return back();

    }
}
