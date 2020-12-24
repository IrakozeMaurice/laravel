
@extends('layout')
@section('title','Home')
@section('content')
    <h2>First {{ $foo }} Laravel</h2>
    <ul>
    @foreach($tasks as $task)
            <li>{{ $task }}</li>
    @endforeach
    </ul>
   @endsection()
   