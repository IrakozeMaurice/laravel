@extends('projects.layout')
@section('title', 'Edit Project')

@section('content')
    <h1>Edit project</h1>
    <br>
    <div class="col-lg-6">
        <form method="POST" action="/projects/{{ $project->id }}">
            {{-- {{ method_field('PATCH') }}
            {{ csrf_field() }} --}}
            @method('PATCH')
            @csrf
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
            <br>
        </form>
        <form method="POST" action="/projects/{{ $project->id }}">
            @method('DELETE')
            @csrf
            <div>
                <button type="submit" class="btn btn-danger">Delete project</button>
            </div>
        </form>
    </div>
@endsection
