@extends('projects.layout')
@section('title', 'Edit Project')

@section('content')
    <h1>Edit project</h1>
    <form method="POST" action="/projects/{{ $project->id }}" class="col-lg-6">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" value="{{ $project->title }}" class="form-control">
        </div>
        <br>
        <div>
            <textarea name="description" class="form-control">{{ $project->description }}</textarea>
        </div>
        <br>
        <div>
            <button type="submit" class="btn btn-primary">Update project</button>
        </div>
    </form>
@endsection
