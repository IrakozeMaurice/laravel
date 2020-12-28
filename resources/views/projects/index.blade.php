@extends('projects.layout')
@section('title', 'Projects')

@section('content')
    <h1>projects</h1>
    <table class="table">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Date Created</th>
            <th>Date Updated</th>
        </tr>
        @foreach ($projects as $project)
            <tr>
                <td>{{ $project->title }}</td>
                <td>{{ $project->description }}</td>
                <td>{{ $project->created_at }}</td>
                <td>{{ $project->updated_at }}</td>
            </tr>
        @endforeach
    </table>
@endsection
