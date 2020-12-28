@extends('projects.layout')
@section('title', 'New Project')

@section('content')
    <h2>Create a project</h2>
    <br>
    <form action="/projects" method="POST" class="col-lg-6">
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" placeholder="Project title" class="form-control">
        </div>
        <br>
        <div>
            <textarea name="description" placeholder="project description" class="form-control"></textarea>
        </div>
        <br>
        <div>
            <button type="submit" class="btn btn-primary">Create project</button>
        </div>
    </form>

@endsection
