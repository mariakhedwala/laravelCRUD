@extends('layout')

@section('content')
    <h1>{{ $project->title }}</h1>
    <p>{{ $project->desc }}</p>
    <p>
        <a href="/projects/{{ $project->id }}/edit">Edit</a>
    </p>
@endsection