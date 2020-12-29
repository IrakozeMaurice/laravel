@extends('projects.layout')
@section('title', 'View Project')

@section('content')
    <h1>{{ $project->title }}</h1>
    <p>{{ $project->description }}</p>
    <a href="/projects/{{ $project->id }}/edit">Edit</a>
    <br><br>

    @if ($project->tasks->count())
        <div>
            @foreach ($project->tasks as $task)
                <div>
                    <form method="POST" action="/tasks/{{ $task->id }}">
                        @method('PATCH')
                        @csrf
                        <label for="completed" class="{{ $task->completed ? 'isChecked' : '' }}">
                            <input type="checkbox" name="completed" onchange="this.form.submit()"
                                {{ $task->completed ? 'checked' : '' }}>
                            {{ $task->description }}
                    </form>
                </div>
            @endforeach
        </div>
    @endif

@endsection
