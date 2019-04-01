@extends('layout')

@section ('content')
    <p>
        <a href="/projects/{{ $project->id }}">back</a>
    </p>
    <p>
        <a href="/projects">home</a>
    </p>
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
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
    <form action="/projects/{{ $project->id }}" method="POST">
        @method('DELETE')
        @csrf
        <div>
            <button type="submit">delete project</button>
        </div>
    </form>
@endsection