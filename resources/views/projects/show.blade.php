@extends('layout')

@section('content')
    <p>
        <a href="/projects">home</a>
    </p>
    <h1> 😉 {{ $project->title }}</h1>
    <div>
        {{ $project->desc }}
        <p>
            <a href="/projects/{{ $project->id }}/edit">Edit</a>
        </p>
    </div>
    
    @if ($project->tasks->count())
        <div>
            @foreach ($project->tasks as $task)
                <form method="POST" action="/completed-tasks/{{ $task->id }}">
                    @if ($task->completed)
                        @method('DELETE')                        
                    @endif
                    @csrf
                    <label class="checkbox {{ $task->completed ? 'is-complete' : '' }}" for="completed">
                        <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                        {{ $task->description }}
                    </label>
                </form>
            @endforeach
        </div>
    @endif

    <form method="POST" action="/projects/{{ $project->id }}/tasks">
        @csrf
        <div>
            <label for="description">New Task</label>
            <input type="text" name="description" placeholder="new task" required>
        </div>
        <div>
            <button type="submit">Add Task</button>
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
@endsection