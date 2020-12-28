<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){
        $projects = Project::all();
        return view('projects.index' , ['projects' => $projects]);
    }

    public function create(){
        return view('projects.create');
    }

    public function store(){
        //create a new project
        $project = new Project;
        $project -> title = request('title');
        $project -> description = request('description');

        //save the project in the database
        $project -> save();

        //redirect back to projects homepage
        return \redirect('/projects');
    }
}
