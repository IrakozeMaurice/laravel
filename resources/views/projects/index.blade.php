@extends('projects.layout')
@section('title', 'Projects')

@section('content')
    <h1>projects</h1>
    <div class="col-lg-8">
        <br>
        <table class="table">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Date Created</th>
                <th>Date Updated</th>
            </tr>
            @foreach ($projects as $project)
                <tr>
                    <td>
                        <a href="/projects/{{ $project->id }}">{{ $project->title }}</a>
                    </td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->created_at }}</td>
                    <td>{{ $project->updated_at }}</td>
                    </a>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
