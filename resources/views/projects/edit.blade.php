@extends('layout')

@section ('content')
    <h1>edit project</h1>
    <form action="/projects/{{ $project->id }}" method="POST">
        @method('PATCH')
        @csrf
        <div>
            <input type="text" name="title" placeholder="project title" value="{{ $project->title }}" required>
        </div>
        <div>
            <textarea name="desc" placeholder="description" required>{{ $project->desc }}</textarea>
        </div>
        <div>
            <button type="submit">update project</button>
        </div>
    </form>
    <form action="/projects/{{ $project->id }}" method="POST">
        @method('DELETE')
        @csrf
        <div>
            <button type="submit">delete project</button>
        </div>
    </form>
@endsection