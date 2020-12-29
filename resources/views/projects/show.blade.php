@extends('projects.layout')
@section('title', 'View Project')

@section('content')
    <h1>{{ $project->title }}</h1>
    <p>{{ $project->description }}</p>
    <br>
    <a href="/projects/{{ $project->id }}/edit">Edit</a>
    @if ($project->tasks->count())
        <div>
            @foreach ($project->tasks as $task)
                <li>{{ $task->description }}</li>
                <span>Completed: {{ $task->completed }}
            @endforeach
        </div>
    @endif
@endsection
