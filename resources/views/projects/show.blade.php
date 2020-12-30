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
                    <form method="POST" action="/completed-tasks/{{ $task->id }}">
                        @if ($task->completed)
                            @method('DELETE')
                        @endif
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
    <br>
    {{-- Add a new task form--}}
    <div class="col-lg-6">
        <form method="POST" action="/projects/{{ $project->id }}/tasks">
            @csrf
            <div>
                <input type="text" name="description" class="form-control" placeholder="Add a new task">
            </div><br>
            <div>
                <button type="submit" class="btn btn-primary">Add task</button>
            </div>
        </form><br>
        @include('projects.errors')
    </div>
@endsection
